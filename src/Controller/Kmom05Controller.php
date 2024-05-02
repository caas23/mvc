<?php

namespace Caas23\Controller;

use Caas23\Entity\Library;
use Caas23\Repository\LibraryRepository;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\ORM\Tools\SchemaTool;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Attribute\Route;

class Kmom05Controller extends AbstractController
{
    #[Route("/library", name: "library", methods: ['GET'])]
    public function library(): Response
    {
        return $this->render('Kmom05/library.html.twig');
    }

    #[Route("/library", name: "library_post", methods: ['POST'])]
    public function libraryPost(
        Request $request,
        ManagerRegistry $doctrine
    ): Response {
        if ($request->request->get("title")) {
            $title = $request->request->get("title");
            $isbn = $request->request->get("isbn");
            $author = $request->request->get("author");
            $image = $request->request->get("image");

            $entityManager = $doctrine->getManager();

            $library = new Library();
            $library->setTitle((string)$title);
            $library->setIsbn((int)$isbn);
            $library->setAuthor((string)$author);
            $library->setImage((string)$image);

            $entityManager->persist($library);
            $entityManager->flush();
        } elseif ($request->request->get("id")) {
            return $this->redirectToRoute("book_by_id", ["id" => $request->request->get("id")]);
        } elseif ($request->request->get("show_all")) {
            return $this->redirectToRoute("library_show_all");
        }
        return $this->redirectToRoute('library');

    }

    #[Route('/library/show/{id}', name: 'book_by_id')]
    public function showBookById(
        LibraryRepository $libraryRepository,
        int $id
    ): Response {
        $library = $libraryRepository->find($id);

        if ($library) {
            $data = [
                'title' => $library->getTitle(),
                'isbn' => $library->getIsbn(),
                'author' => $library->getAuthor(),
                'image' => $library->getImage(),
                'id' => $id
            ];
        }
        if (isset($data)) {
            return $this->render('Kmom05/single-book.html.twig', $data);
        } return $this->redirectToRoute('library');
    }

    #[Route('/library/show', name: 'library_show_all')]
    public function showAllBooks(
        LibraryRepository $libraryRepository
    ): Response {
        $books = $libraryRepository->findAll();

        $data = [
            'books' => $books
        ];
        return $this->render('Kmom05/all-books.html.twig', $data);
    }

    #[Route('/library/update/{id}', name: 'library_update_by_id', methods: ["GET"])]
    public function updateBookById(
        ManagerRegistry $doctrine,
        int $id
    ): Response {
        $entityManager = $doctrine->getManager();
        $library = $entityManager->getRepository(Library::class)->find($id);

        if ($library) {
            $data = [
                'title' => $library->getTitle(),
                'isbn' => $library->getIsbn(),
                'author' => $library->getAuthor(),
                'image' => $library->getImage(),
                'id' => $id
            ];
        }
        if (isset($data)) {
            return $this->render('Kmom05/update-book.html.twig', $data);
        } return $this->redirectToRoute('library');
    }

    #[Route('/library/update/{id}', name: 'library_update_by_id_post', methods: ["POST"])]
    public function updateBookByIdPost(
        Request $request,
        ManagerRegistry $doctrine,
        int $id
    ): Response {
        $entityManager = $doctrine->getManager();
        $book = $entityManager->getRepository(Library::class)->find($id);

        $title = $request->request->get("title");
        $isbn = $request->request->get("isbn");
        $author = $request->request->get("author");
        $image = $request->request->get("image");

        if (!$book) {
            throw $this->createNotFoundException(
                'No book found for id '.$id
            );
        }

        $book->setTitle((string)$title);
        $book->setIsbn((int)$isbn);
        $book->setAuthor((string)$author);
        $book->setImage((string)$image);

        $entityManager->flush();

        return $this->redirectToRoute('library_show_all');
    }

    #[Route('/library/delete/{id}', name: 'library_delete_by_id')]
    public function deleteBookById(
        ManagerRegistry $doctrine,
        int $id
    ): Response {
        $entityManager = $doctrine->getManager();
        $library = $entityManager->getRepository(Library::class)->find($id);

        if (!$library) {
            throw $this->createNotFoundException(
                'No book found for id '.$id
            );
        }

        $entityManager->remove($library);
        $entityManager->flush();

        return $this->redirectToRoute('library_show_all');
    }

    #[Route('/library/reset', name: 'library_reset')]
    public function resetLibrary(
        ManagerRegistry $doctrine
    ): Response {
        $entityManager = $doctrine->getManager();
        $data = $entityManager->getMetadataFactory()->getAllMetadata();

        $tool = new SchemaTool($entityManager); //@phpstan-ignore-line
        $tool->dropSchema($data); //@phpstan-ignore-line
        $tool->createSchema($data); //@phpstan-ignore-line

        $books = [
            [
                "Webbutveckling med PHP och MySQL",
                "Montathar Faraon",
                9789144105567,
                "webbutveckling-med-php-och-sql.jpg"
            ],
            [
                "Databasteknik",
                "Thomas Padron-McCarthy, Tore Risch",
                9789144069197,
                "databasteknik.jpg"
            ],
            [
                "JavaScript: The Good Parts",
                "Douglas Crockford",
                9780596153830,
                "javascript-the-good-parts.jpg"
            ]
        ];

        foreach ($books as $book) {
            $library = new Library();
            $library->setTitle($book[0]);
            $library->setAuthor($book[1]);
            $library->setIsbn($book[2]);
            $library->setImage($book[3]);
            $entityManager->persist($library);
            $entityManager->flush();
        }
        return $this->redirectToRoute('library');
    }

    #[Route('/api/library/books', name: 'api/library/books')]
    public function showAllBooksAPI(
        LibraryRepository $libraryRepository
    ): Response {
        $books = $libraryRepository->findAll();

        $response = $this->json($books);
        $response->setEncodingOptions(
            $response->getEncodingOptions() | JSON_PRETTY_PRINT
        );
        return $response;
    }

    #[Route('/api/library/book/{isbn}', name: 'api/library/book')]
    public function showOneBookAPI(
        LibraryRepository $libraryRepository,
        int $isbn
    ): Response {
        $book = $libraryRepository->findOneByIsbn($isbn);

        $response = $this->json($book);
        $response->setEncodingOptions(
            $response->getEncodingOptions() | JSON_PRETTY_PRINT
        );
        return $response;
    }
}
