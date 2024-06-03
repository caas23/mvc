<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* Shared/report.html.twig */
class __TwigTemplate_6a2ab42f4dcd18414c98ab46121efac0 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "Shared/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Shared/report.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Shared/report.html.twig"));

        $this->parent = $this->loadTemplate("Shared/base.html.twig", "Shared/report.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Redovisning";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "    <h1>Redovisning</h1>
    <div class=\"container-report\">
        <div>
            <h3 id=\"kmom01\">Kmom01</h3>
            <p>
                <strong>Förkunskaper</strong><br>
                <p>
                    Mina förkunskaper kring objektorientering sträcker sig enbart till tidigare kurser under utbildningen,
                    där kanske oopython varit den som gett mest insikt i det. I början av den kursen kändes det ganska rörigt och det var 
                    inte helt lätt att greppa konceptet, men nu när jag hunnit bekanta mig med det känns det som att det sjunkit in något.
                </p>

                <strong>Objekt och klasser i PHP</strong><br>
                <p>
                    För att komma igång med att skapa en klass i PHP behöver man ha lite koll på objekt i PHP.
                    Ett objekt kan skapas utifrån en fördefinierad klass, eller utifrån en egendefinierad sådan (vilket görs med hjälp av nyckelorder <code>class</code>). 
                    För att skapa ett nytt objekt används nyckelordet <code>new</code> och för att lägga till properties till ett objekt används
                    <code>objekt -> property = tilldelning</code>.<br>
                    Inom en klass definieras medlemsvariabler, vilka kan vara till exempel publika eller privata. 
                    Om variablerna är privata behövs set- och get-metoder för att hantera dem, vilket är ett ganska vanligt 
                    sätt att hantera medlemsvariabler - att ha privata metoder har flera fördelar gentemot publika sådana.<br>
                    Givetvis finns flera andra delar, som inte berörts här, men kort sagt behövs förståelse för hur en klass skapas,
                    hur medlemsvariabler och metoder används och hanteras, hur objekt instansieras och hur tilldelning sker.<br><br>
                </p>

                <strong>Kodbasen</strong><br>
                <p>
                    Angående kodbasen - initialt var reaktionen \"Oj, här finns en hel del att sätta sig in i.\" Men efter att ha arbetat igenom
                    guiden, mer eller mindre en och en halv gång (på grund av en fadäs), klarnade många delar. Jag insåg att jag faktiskt är bekant
                    med många av delarna - jag har ju tidigare stött på json, php, css, twig och så vidare. Känslan nu efter att ha arbetat igenom
                    första kursmomentet är att jag känner mig hyfsat trygg i den övergripande bild jag fått av kodbasen och strukturen.<br><br>
                </p>

                <strong>PHP The Right Way</strong><br>
                <p>
                    Här ska jag väl vara ärlig och säga att jag har inte läst den \"pärm till pärm\" så att säga, men utifrån huvudrubrikerna
                    i början av artikeln har jag tittat lite mer på Code Style Guide och Coding Practices för att få en insikt kring dessa delar. Utöver dessa
                    läste jag även mer om Templating, eftersom vi redan kommit igång och arbetar med detta i kursen. Slutligen la jag lite extra tid på Testing-avsnittet
                    eftersom jag i inledningen av kursen sett att vi kommer beröra tester. I PHP? Det vet jag inte än, men jag tänker att det kan vara värdelfullt att ha
                    ögnat igenom detta avsnitt oavsett.<br><br>
                </p>

                <strong>TIL</strong><br>
                <p>
                    - Hur grundstrukturen för klasser och objekt ser ut i PHP.<br>
                    - Att CSS stödjer nesting! Det hade jag missat och med den vetskapen kunde jag justera min CSS-kod lite.<br>
                    - Hur en variabel kan inkluderas i bildkällan i en img-tag i en Twig-fil. Detta var något jag tänkte att det borde ju gå, 
                    men att faktiskt implementera det i denna specifika situation krävde att jag vände mig till dokumentation för vägledning.
                </p>
            </p>
        </div>
        <div>
            <h3 id=\"kmom02\">Kmom02</h3>
            <p>
                <strong>Arv</strong><br>
                    <p>
                        Arv innebär att en klass ärver från en annan klass, och därmed kan utnyttja de metoder som finns i förälderklassen. Ett exempel
                        från uppgiften är kortleken med jokrar, som ärver från kortleken utan jokrar men även utökar denna för att få in jokrarna.
                    </p>

                <strong>Komposition</strong><br>
                    <p>
                        Komposition kan beskrivas som en \"har en\"-relation. Denna typ av relation är av stark karaktär, där subklassen inte kan existera på egen hand.
                        Ett exempel från uppgiften är en korthand, som ju är beroende av kort för att kunna existera.
                    </p>

                <strong>Interface</strong><br>
                    <p>
                        Ett interface kan ses om en uppsättning regler, eller krav, som en klass måste uppfylla. Om en klass implementerar ett interface
                        så innebär det att den klassen kommer att innehålla de metoder som specificerats i interfacet.
                    </p>

                <strong>Trait</strong><br>
                    <p>
                        Trait kan ses som ett alternativ till multipelt arv (som inte är möjligt i PHP), där en klass kan använda ett eller flera trait(s). 
                        Trait kan återanvändas i flera klasser och kan beskrivas som moduler som finns på en plats men som kan nyttjas på flera.  
                    </p>

                <strong>Implemenation av uppgiften</strong><br>
                <p>
                    Jag är generellt nöjd med hur jag löst uppgiften, men ser att delar av koden blir densamma för kortleken utan jokrar som med den med jokrar.
                    Här hade jag troligen kunnat göra koden mer DRY och snygga till det hela men då timmen är sen och deadline är runt hörnet, 
                    har jag låtit den vara så som den är för stunden.<br>
                    En del jag fastnade på och som tog ett tag att komma förbi, var sessionsdelen, inte just att spara och hämta från sesssionen, men att skriva ut de
                    delar som kändes relevanta i <code>/session</code>, och att få fram flashmeddelandet på rätt plats när sessionen tömts.<br>
                    Utöver detta var jag inte helt säker på hur <code>/card/deck/draw/:number</code> och <code>/card/deck/deal/:players/:cards</code> förväntades fungera.
                    Detta ledde till att jag gjorde en av vardera möjlighet jag såg, den förstnämnda går via ett POST-formulär och den andra, med både spelare och kort
                    går direkt via URL:en. Naturligtvis hade jag kunnat be om ett förtydligande, men landade i att göra en av vardera.  
                </p>
                
                <strong>Reflektioner</strong><br>
                <p>
                    Den spontana reflektionen är att det är otroligt roligt att hålla på med, men även en hel del att hålla koll på och sätta sig in i. 
                    Samtidigt får jag känsla av att om man bara får grepp om det så finns det en tydlig struktur och det finns ett tankemönster att förhålla
                    sig till. Så min reflektion är egentligen att det är bara att gnugga på, googla nya koncept och dylikt för att försöka få grepp om sådant
                    som känns nytt och obekant.
                </p>

                <strong>TIL</strong><br>
                <p>
                    Att vid hinder ta det lugnt, ta ett steg tillbaka och fundera;<br>
                     - Var i kedjan verkar felet uppstå?<br>
                     - Hur kan jag \"testa\" om felet finns där jag tror och hur kan jag börjar åtgärda det?<br>
                    I till exempel Python är jag van att kunna nyttja Thonny och stega genom delar, men här drog jag istället
                    nytta av sessionen och skickade med diverse värden för att se, vad är värdet i denna stund och är det som jag förväntar mig?
                </p>
            </p>
        </div>
        <div>
            <h3 id=\"kmom03\">Kmom03</h3>
            <p>
    
                <strong>Modellering</strong><br>
                <p>
                    Första tanken när jag skulle börja skissa på ett flödesdiagram var ungefär \"Oj, var börjar jag?\". När jag väl kom igång insåg jag att det faktiskt är 
                    riktigt hjälpsamt att skissa upp flödet och visualisera det på så sätt, och det var inte alls lika \"stort\" att ta sig an som jag först trodde. 
                    Det var snarare bara otroligt hjälpsamt och gav en tydlig bild av vad som skulle göras och hur flödet skulle se ut, helt enkelt.<br>
                    Detsamma gällde nog psuedokoden, att det först kändes lite klurigt hur den skulle skrivas för att faktiskt klassas som psuedokod och inte programmeringskod.
                    Men även denna del kändes väldigt hjälpsam för att få lite koll på stegen och hur allt skulle hänga samman.<br>
                    Denna metodik är absolut något jag kommer ta med mig och använda mig mer utav!  
                </p>
                
                <strong>Implementation</strong><br>
                <p>
                    Jag är generellt nöjd med hur jag löste uppgiften, då spelet fungerar så som jag förväntar mig. Jag tror dock att jag gjorde det onödigt krånligt till en början och
                    fick därför strutkurera om en del när jag var klar med ett första, fungerande utkast. Även om jag hade ett flödesdiagram och en psuedokod att förhålla mig till
                    så hade jag inte helt klart för mig var jag ville stoppa alla delar i koden, så att säga, och gjorde därför det onödigt kluddigt till en början. 
                    Efter att ha strukturerat om lite och fått lite ordning på filer och kod så känner jag mig nöjd med resultatet.<br>
                    En förbättringspotential, eller vidareutveckling, vore att göra spelet lite mer avancerat, och göra banken smartare.<br>
                    Rent kodmässigt vore en förbättring att bli av med alla meddelanden som fås via <code>composer lint</code>. Här har jag dock valt att förbise fyra meddelanden;<br>
                    &bull; Det första, som handlar om \"Cyclomatic Complexity of 10\" har jag medvetet valt att förbise, då jag efter granskning av koden anser att det i det givna fallet
                    är godtagbart. Här bör man dock kanske vara lite kritisk och fundera på \"vem är jag att säga att det är godtagbart?\", men det är min bedömning i detta fall. En mer
                    erfaren programmerare (läs rättare) kanske skulle se det på ett annat sätt och i sådant fall tas feedback tacksamt emot!<br>
                    &bull; De resterande tre meddelande är av samma karaktär, och handlar om \"no value type specified in iterable type array\", dessa har jag valt att förbise av den enkla
                    anledningen att jag inte kan lösa dem utan att lyckas \"förstöra\" resten av min kod. Återigen, eventuell feedback på detta tas emot med öppet sinne. 
                </p>
                
                <strong>Ramverket</strong><br>
                <p>
                    Känslan så långt är att det är mycket att lära, men även mycket som blir tydligare ju längre in i kursen vi kommer. Det finns många delar där jag känner att jag behöver
                    läsa på för att förstå hur det funkar i just Symfony eller hur något förväntas se ut, lösas, eller hanteras. Den generella känslan är dock att jag tycker det är spännande
                    och ser framemot att lära mig ännu mer innan kursen är slut.
                </p>

                <strong>TIL</strong><br>
                <p>
                    - Mer om hur sessionen funkar i Symfony. Jag insåg efter att ha installerat linters att min lösning för sessionen fungerade rent \"kodmässigt\" men där jag 
                    ändå fick ändra om en del för att få det att funka med phpmd och phpstan. Efter att ha läst på fick jag en bättre insikt i att \"Ah.. det är så här jag BÖR 
                    hantera sessionsdelarna i Symfony, även om min första lösning fungerade utåt sett.\"<br>
                    - En generell TIL, är att jag ibland skriver onödig kod, som jag får feedback på från phpmd och phpstan. Vilket i sin tur leder till att jag sakta men säkert 
                    lär mig hur jag faktiskt kan effektivisera den kod jag skriver. Många gånger har det handlat om onödiga <code>else-satser</code>. Otroligt lärorikt!
                </p>
            </p>
        </div>
        <div>
            <h3 id=\"kmom04\">Kmom04</h3>
            <p>
    
                <strong>PHPUnit</strong><br>
                <p>
                    Att skriva testkod för annan kod är något jag är lite bekant med sedan tidigare, men inte i just PHP.<br>
                    Att skriva bra testkod känns ibland lite klurigt, och i just detta fall var det extra klurigt att få till bra testkod
                    för sessionklassen, som ju är beroende av sessionsvariabler. Jag har därför inte lyckats få full kodtäckning i mina tester, men kommit 
                    vad jag känner är nära utifrån förutsättningarna.  
                </p>
                
                <strong>Kodtäckning</strong><br>
                <p>
                    Som nämnt ovan nådde jag inte hela vägen för sessionklassen, och landade strax under 85% för denna. De andra klasserna lyckades jag nå 100% för, vilket gjorde
                    att min totala kodtäckning landade strax över 90% i slutändan. 
                </p>
                
                <strong>Testbarhet</strong><br>
                <p>
                    Återigen är vi tillbaka i sessionklasssen, som jag upplevde lite svår att testa då den är så beroende av sessionen. Jag försökte läsa på lite och
                    se hur jag skulle tackla det, men nådde inte hela vägen ändå. Jag ser det dock som en förbättring att jag lyckades skriva om koden och nå den täckning jag 
                    gjorde, då den initiala procenten låg omkring 65-70%, vill jag minnas.<br>
                    De andra klasserna upplevdes enklare i detta avseende, och jag kände att jag kunde genomföra rimliga tester för metoderna.
                </p>

                <strong>Omskrivning för ökad testbarhet</strong><br>
                <p>
                    Jag valde som sagt att skriva om delar av min sessionsklass för att underlätta testningen. Hade den initiala täcknignen varit, låt säga 90% för klassen, hade
                    jag troligen tänkt att \"Okej, inte hela vägen men nära nog\". Nu när den var så förhållandevis låg kände jag att \"här måste det gå att göra något för att komma upp lite\",
                    vilket det bevisligen även gick. Jag vill dock minnas att jag motiverade delar av min intiala kod för klassen med att jag hellre la det i klassen är i kontrollern,
                    för att spara några kodrader där. Men nu när jag kom till kmom04 kände jag att det blev mer fördelaktigt att lägga någon extra rad i kontrollerna för att kunna
                    testa metoderna på ett smidigare sätt.
                </p>
                
                <strong>Snygg och ren kod</strong><br>
                <p>
                    Jag vill dra mig till minnes att Mikael i en föreläsning till kursmomentet slog fast att, jo, man kan nog påstå att tesbarkod och \"snygg och ren kod\" går lite
                    hand i hand. Jag är beredd att hålla med här, just för att jag under testning av min egen kod sett hur strukturen av koden spelar in när den ska testas.
                    Och mer strukturerad kod känns väl generellt snyggare?! Jag tror absolut så!
                </p>
                
                <strong>TIL</strong><br>
                <p>
                    - Vad PHPUnit och PHPdoc är, och hur de kan användas.<br>
                    - Dessutom har jag fått en inblick i hur mockning fungerar i PHP.<br>
                </p>
            </p>
        </div>
        <div>
            <h3 id=\"kmom05\">Kmom05</h3>
            <p>
                <strong>Symfony/doctrine</strong><br>
                <p>
                    Att arbeta igenom övningen gick bra. Likt tidigare övningar var den tydlig, enkel att följa och gav relevanta lästips längs vägen.<br>
                    Något jag noterade, som gick smidigt att arbeta igenom, var att delar av filerna behövde justeras något för att fungera med mitt personliga namespace. 
                    I de fall där jag missat att lägga in mitt namespace i någon konfiguration, gav symfony tydlig feedback om var jag behövde gå in och peta för att 
                    få alla delar att fungera tillsammans.
                </p>
                
                <strong>Applikation</strong><br>
                <p>
                    Mitt primära fokus till en början var att få alla delar i kravet på plats och se så de fungerade som önskat. Med allt på plats ville jag se till att 
                    det var smidigt att navigera mellan de olika delarna för att få ett naturligt flöde.

                </p>

                <strong>CRUD och ORM</strong><br>
                <p>
                    Även denna del kändes smidig att arbeta med. Personligen anser jag att det är skönt att ha fått lära sig databasdelarna tidigare,
                    för att förstå vad som sker, även om det i detta fall inte känns fullt nödvändigt (nåja, nödvändigt är det nog, men inte avgörande) 
                    för att faktiskt arbeta med kursmomentet.<br>
                    ORM som helhet känns smidigt på många sätt, men jag upplever även att det är något jag behöver läsa mer om, för att fullt förstå
                    och greppa alla delar och hur allt hänger ihop. Återigen, att arbeta med kursmomentet gick smidigt och jag tycker mig ha förstått grunden,
                    men det är många delar som jag känner att jag vill läsa mer om för att känna att jag fullt greppar hur allt samspelar.<br> Samtidigt är det 
                    nog ingen som förväntar sig att man ska vara fullärd efter ett kursmoment, så detta får adderas till sommarens läslista för mer insikt!
                     
                </p>
                
                <strong>TIL</strong><br>
                <p>
                    - Att en integer kan ha en gräns, och att denna gräns kan skilja sig beroende på miljö. 
                    Vilket ledde till att mitt ISBN inte kunde sättas till <code>integer</code>, utan behövde ändras till <code>string</code>.<br>
                </p>
                
                <strong>Övrigt</strong><br>
                <p>
                    Min lösning för <code>library/reset</code> är troligen inte helt ideal, det finns nog bättre sätt att lösa den delen.<br>
                    Jag valde dock att gå på \"en lösning som funkar\" då denna del var optionell och mitt mål med den delen var att få ett snabbt sätt 
                    att återställa databasen vid testning.<br>
                    Min lösning uppfyller mina egna krav och får därför anses god nog i detta sammanhang.
                </p>
            </p>
        </div>
        <div>
            <h3 id=\"kmom06\">Kmom06</h3>
            <p>
                <strong>PHPmetrics</strong><br>
                <p>
                    Jag tycker det var lärorikt att arbeta med verktyget. Att få en uppfattning om koden med hjälp av bilder och siffror var något
                    som gav mig en bättre bild av min kod som helhet.
                </p>
                
                <strong>Scrutinizer</strong><br>
                <p>
                    Även detta verktyg upplevde jag lärorikt och hjälpsamt, kanske ännu mer än föregående, då jag upplevde feedbacken från detta
                    ännu tydligare och rakt på sak (till exempel issues-delen kändes väldigt tydlig att ta till sig). Dock handlar nog den upplevelsen om
                    en helhetsförståelse för respektive verktyg också, där jag möjligen hade lättare att ta till mig Scrutinizer i stort.

                </p>

                <strong>Kodkvalitet</strong><br>
                <p>
                    Generellt tänker jag att kodkvaitet är viktigt och säger något om programmet, men som nämnt i uppgiften tror jag inte det är ett 
                    absolut facit. Jag tror dock att på en mer oerfaren nivå är det viktigare att aktivt arbeta med dessa delar, för att få en förståelse 
                    och en grund. Medan det på en mer erfaren nivå troligen är något som kommer att hänga med mer undermedvetet. Sedan om man tänker badges,
                    skulle jag ha två snarlika projekt framför mig där den ena har högre betyg, grönare fält och så vidare, så skulle jag troligen bli mer
                    lockad att läsa vidare om det projektet först.<br>
                    Under kursmomentets gång har jag dock fått se exempel på CImage (som jag använt i designkursen) och där sett att CImage inte presterar 
                    särskilt högt vad gäller badges.<br>
                     - Fungerade CImage som förväntat i desginkursen? Ja.<br>
                     - Hade jag under designkursen kunnat pekat ut Cimage som något som troligen hade låga värden vad gäller badges? Nej.<br>
                    Så kontentan blir att kodkvaitet säger något, men inte allt.
                </p>
                
                <strong>TIL</strong><br>
                <p>
                    - Hur man kan arbeta med automatiserade tester för att utvärdera sin kod.<br>
                    - Vad PHPMetrics och Scrutinizer är, och en inblick i den roll sådana verktyg kan spela.
                </p>
            </p>
        </div>
        <div>
            <h3 id=\"kmom07-10\" >Kmom07-10</h3>
            <p>
                Redovisningstext för detta kmom kommer här.
            </p>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "Shared/report.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"Shared/base.html.twig\" %}

{% block title %}Redovisning{% endblock %}

{% block body %}
    <h1>Redovisning</h1>
    <div class=\"container-report\">
        <div>
            <h3 id=\"kmom01\">Kmom01</h3>
            <p>
                <strong>Förkunskaper</strong><br>
                <p>
                    Mina förkunskaper kring objektorientering sträcker sig enbart till tidigare kurser under utbildningen,
                    där kanske oopython varit den som gett mest insikt i det. I början av den kursen kändes det ganska rörigt och det var 
                    inte helt lätt att greppa konceptet, men nu när jag hunnit bekanta mig med det känns det som att det sjunkit in något.
                </p>

                <strong>Objekt och klasser i PHP</strong><br>
                <p>
                    För att komma igång med att skapa en klass i PHP behöver man ha lite koll på objekt i PHP.
                    Ett objekt kan skapas utifrån en fördefinierad klass, eller utifrån en egendefinierad sådan (vilket görs med hjälp av nyckelorder <code>class</code>). 
                    För att skapa ett nytt objekt används nyckelordet <code>new</code> och för att lägga till properties till ett objekt används
                    <code>objekt -> property = tilldelning</code>.<br>
                    Inom en klass definieras medlemsvariabler, vilka kan vara till exempel publika eller privata. 
                    Om variablerna är privata behövs set- och get-metoder för att hantera dem, vilket är ett ganska vanligt 
                    sätt att hantera medlemsvariabler - att ha privata metoder har flera fördelar gentemot publika sådana.<br>
                    Givetvis finns flera andra delar, som inte berörts här, men kort sagt behövs förståelse för hur en klass skapas,
                    hur medlemsvariabler och metoder används och hanteras, hur objekt instansieras och hur tilldelning sker.<br><br>
                </p>

                <strong>Kodbasen</strong><br>
                <p>
                    Angående kodbasen - initialt var reaktionen \"Oj, här finns en hel del att sätta sig in i.\" Men efter att ha arbetat igenom
                    guiden, mer eller mindre en och en halv gång (på grund av en fadäs), klarnade många delar. Jag insåg att jag faktiskt är bekant
                    med många av delarna - jag har ju tidigare stött på json, php, css, twig och så vidare. Känslan nu efter att ha arbetat igenom
                    första kursmomentet är att jag känner mig hyfsat trygg i den övergripande bild jag fått av kodbasen och strukturen.<br><br>
                </p>

                <strong>PHP The Right Way</strong><br>
                <p>
                    Här ska jag väl vara ärlig och säga att jag har inte läst den \"pärm till pärm\" så att säga, men utifrån huvudrubrikerna
                    i början av artikeln har jag tittat lite mer på Code Style Guide och Coding Practices för att få en insikt kring dessa delar. Utöver dessa
                    läste jag även mer om Templating, eftersom vi redan kommit igång och arbetar med detta i kursen. Slutligen la jag lite extra tid på Testing-avsnittet
                    eftersom jag i inledningen av kursen sett att vi kommer beröra tester. I PHP? Det vet jag inte än, men jag tänker att det kan vara värdelfullt att ha
                    ögnat igenom detta avsnitt oavsett.<br><br>
                </p>

                <strong>TIL</strong><br>
                <p>
                    - Hur grundstrukturen för klasser och objekt ser ut i PHP.<br>
                    - Att CSS stödjer nesting! Det hade jag missat och med den vetskapen kunde jag justera min CSS-kod lite.<br>
                    - Hur en variabel kan inkluderas i bildkällan i en img-tag i en Twig-fil. Detta var något jag tänkte att det borde ju gå, 
                    men att faktiskt implementera det i denna specifika situation krävde att jag vände mig till dokumentation för vägledning.
                </p>
            </p>
        </div>
        <div>
            <h3 id=\"kmom02\">Kmom02</h3>
            <p>
                <strong>Arv</strong><br>
                    <p>
                        Arv innebär att en klass ärver från en annan klass, och därmed kan utnyttja de metoder som finns i förälderklassen. Ett exempel
                        från uppgiften är kortleken med jokrar, som ärver från kortleken utan jokrar men även utökar denna för att få in jokrarna.
                    </p>

                <strong>Komposition</strong><br>
                    <p>
                        Komposition kan beskrivas som en \"har en\"-relation. Denna typ av relation är av stark karaktär, där subklassen inte kan existera på egen hand.
                        Ett exempel från uppgiften är en korthand, som ju är beroende av kort för att kunna existera.
                    </p>

                <strong>Interface</strong><br>
                    <p>
                        Ett interface kan ses om en uppsättning regler, eller krav, som en klass måste uppfylla. Om en klass implementerar ett interface
                        så innebär det att den klassen kommer att innehålla de metoder som specificerats i interfacet.
                    </p>

                <strong>Trait</strong><br>
                    <p>
                        Trait kan ses som ett alternativ till multipelt arv (som inte är möjligt i PHP), där en klass kan använda ett eller flera trait(s). 
                        Trait kan återanvändas i flera klasser och kan beskrivas som moduler som finns på en plats men som kan nyttjas på flera.  
                    </p>

                <strong>Implemenation av uppgiften</strong><br>
                <p>
                    Jag är generellt nöjd med hur jag löst uppgiften, men ser att delar av koden blir densamma för kortleken utan jokrar som med den med jokrar.
                    Här hade jag troligen kunnat göra koden mer DRY och snygga till det hela men då timmen är sen och deadline är runt hörnet, 
                    har jag låtit den vara så som den är för stunden.<br>
                    En del jag fastnade på och som tog ett tag att komma förbi, var sessionsdelen, inte just att spara och hämta från sesssionen, men att skriva ut de
                    delar som kändes relevanta i <code>/session</code>, och att få fram flashmeddelandet på rätt plats när sessionen tömts.<br>
                    Utöver detta var jag inte helt säker på hur <code>/card/deck/draw/:number</code> och <code>/card/deck/deal/:players/:cards</code> förväntades fungera.
                    Detta ledde till att jag gjorde en av vardera möjlighet jag såg, den förstnämnda går via ett POST-formulär och den andra, med både spelare och kort
                    går direkt via URL:en. Naturligtvis hade jag kunnat be om ett förtydligande, men landade i att göra en av vardera.  
                </p>
                
                <strong>Reflektioner</strong><br>
                <p>
                    Den spontana reflektionen är att det är otroligt roligt att hålla på med, men även en hel del att hålla koll på och sätta sig in i. 
                    Samtidigt får jag känsla av att om man bara får grepp om det så finns det en tydlig struktur och det finns ett tankemönster att förhålla
                    sig till. Så min reflektion är egentligen att det är bara att gnugga på, googla nya koncept och dylikt för att försöka få grepp om sådant
                    som känns nytt och obekant.
                </p>

                <strong>TIL</strong><br>
                <p>
                    Att vid hinder ta det lugnt, ta ett steg tillbaka och fundera;<br>
                     - Var i kedjan verkar felet uppstå?<br>
                     - Hur kan jag \"testa\" om felet finns där jag tror och hur kan jag börjar åtgärda det?<br>
                    I till exempel Python är jag van att kunna nyttja Thonny och stega genom delar, men här drog jag istället
                    nytta av sessionen och skickade med diverse värden för att se, vad är värdet i denna stund och är det som jag förväntar mig?
                </p>
            </p>
        </div>
        <div>
            <h3 id=\"kmom03\">Kmom03</h3>
            <p>
    
                <strong>Modellering</strong><br>
                <p>
                    Första tanken när jag skulle börja skissa på ett flödesdiagram var ungefär \"Oj, var börjar jag?\". När jag väl kom igång insåg jag att det faktiskt är 
                    riktigt hjälpsamt att skissa upp flödet och visualisera det på så sätt, och det var inte alls lika \"stort\" att ta sig an som jag först trodde. 
                    Det var snarare bara otroligt hjälpsamt och gav en tydlig bild av vad som skulle göras och hur flödet skulle se ut, helt enkelt.<br>
                    Detsamma gällde nog psuedokoden, att det först kändes lite klurigt hur den skulle skrivas för att faktiskt klassas som psuedokod och inte programmeringskod.
                    Men även denna del kändes väldigt hjälpsam för att få lite koll på stegen och hur allt skulle hänga samman.<br>
                    Denna metodik är absolut något jag kommer ta med mig och använda mig mer utav!  
                </p>
                
                <strong>Implementation</strong><br>
                <p>
                    Jag är generellt nöjd med hur jag löste uppgiften, då spelet fungerar så som jag förväntar mig. Jag tror dock att jag gjorde det onödigt krånligt till en början och
                    fick därför strutkurera om en del när jag var klar med ett första, fungerande utkast. Även om jag hade ett flödesdiagram och en psuedokod att förhålla mig till
                    så hade jag inte helt klart för mig var jag ville stoppa alla delar i koden, så att säga, och gjorde därför det onödigt kluddigt till en början. 
                    Efter att ha strukturerat om lite och fått lite ordning på filer och kod så känner jag mig nöjd med resultatet.<br>
                    En förbättringspotential, eller vidareutveckling, vore att göra spelet lite mer avancerat, och göra banken smartare.<br>
                    Rent kodmässigt vore en förbättring att bli av med alla meddelanden som fås via <code>composer lint</code>. Här har jag dock valt att förbise fyra meddelanden;<br>
                    &bull; Det första, som handlar om \"Cyclomatic Complexity of 10\" har jag medvetet valt att förbise, då jag efter granskning av koden anser att det i det givna fallet
                    är godtagbart. Här bör man dock kanske vara lite kritisk och fundera på \"vem är jag att säga att det är godtagbart?\", men det är min bedömning i detta fall. En mer
                    erfaren programmerare (läs rättare) kanske skulle se det på ett annat sätt och i sådant fall tas feedback tacksamt emot!<br>
                    &bull; De resterande tre meddelande är av samma karaktär, och handlar om \"no value type specified in iterable type array\", dessa har jag valt att förbise av den enkla
                    anledningen att jag inte kan lösa dem utan att lyckas \"förstöra\" resten av min kod. Återigen, eventuell feedback på detta tas emot med öppet sinne. 
                </p>
                
                <strong>Ramverket</strong><br>
                <p>
                    Känslan så långt är att det är mycket att lära, men även mycket som blir tydligare ju längre in i kursen vi kommer. Det finns många delar där jag känner att jag behöver
                    läsa på för att förstå hur det funkar i just Symfony eller hur något förväntas se ut, lösas, eller hanteras. Den generella känslan är dock att jag tycker det är spännande
                    och ser framemot att lära mig ännu mer innan kursen är slut.
                </p>

                <strong>TIL</strong><br>
                <p>
                    - Mer om hur sessionen funkar i Symfony. Jag insåg efter att ha installerat linters att min lösning för sessionen fungerade rent \"kodmässigt\" men där jag 
                    ändå fick ändra om en del för att få det att funka med phpmd och phpstan. Efter att ha läst på fick jag en bättre insikt i att \"Ah.. det är så här jag BÖR 
                    hantera sessionsdelarna i Symfony, även om min första lösning fungerade utåt sett.\"<br>
                    - En generell TIL, är att jag ibland skriver onödig kod, som jag får feedback på från phpmd och phpstan. Vilket i sin tur leder till att jag sakta men säkert 
                    lär mig hur jag faktiskt kan effektivisera den kod jag skriver. Många gånger har det handlat om onödiga <code>else-satser</code>. Otroligt lärorikt!
                </p>
            </p>
        </div>
        <div>
            <h3 id=\"kmom04\">Kmom04</h3>
            <p>
    
                <strong>PHPUnit</strong><br>
                <p>
                    Att skriva testkod för annan kod är något jag är lite bekant med sedan tidigare, men inte i just PHP.<br>
                    Att skriva bra testkod känns ibland lite klurigt, och i just detta fall var det extra klurigt att få till bra testkod
                    för sessionklassen, som ju är beroende av sessionsvariabler. Jag har därför inte lyckats få full kodtäckning i mina tester, men kommit 
                    vad jag känner är nära utifrån förutsättningarna.  
                </p>
                
                <strong>Kodtäckning</strong><br>
                <p>
                    Som nämnt ovan nådde jag inte hela vägen för sessionklassen, och landade strax under 85% för denna. De andra klasserna lyckades jag nå 100% för, vilket gjorde
                    att min totala kodtäckning landade strax över 90% i slutändan. 
                </p>
                
                <strong>Testbarhet</strong><br>
                <p>
                    Återigen är vi tillbaka i sessionklasssen, som jag upplevde lite svår att testa då den är så beroende av sessionen. Jag försökte läsa på lite och
                    se hur jag skulle tackla det, men nådde inte hela vägen ändå. Jag ser det dock som en förbättring att jag lyckades skriva om koden och nå den täckning jag 
                    gjorde, då den initiala procenten låg omkring 65-70%, vill jag minnas.<br>
                    De andra klasserna upplevdes enklare i detta avseende, och jag kände att jag kunde genomföra rimliga tester för metoderna.
                </p>

                <strong>Omskrivning för ökad testbarhet</strong><br>
                <p>
                    Jag valde som sagt att skriva om delar av min sessionsklass för att underlätta testningen. Hade den initiala täcknignen varit, låt säga 90% för klassen, hade
                    jag troligen tänkt att \"Okej, inte hela vägen men nära nog\". Nu när den var så förhållandevis låg kände jag att \"här måste det gå att göra något för att komma upp lite\",
                    vilket det bevisligen även gick. Jag vill dock minnas att jag motiverade delar av min intiala kod för klassen med att jag hellre la det i klassen är i kontrollern,
                    för att spara några kodrader där. Men nu när jag kom till kmom04 kände jag att det blev mer fördelaktigt att lägga någon extra rad i kontrollerna för att kunna
                    testa metoderna på ett smidigare sätt.
                </p>
                
                <strong>Snygg och ren kod</strong><br>
                <p>
                    Jag vill dra mig till minnes att Mikael i en föreläsning till kursmomentet slog fast att, jo, man kan nog påstå att tesbarkod och \"snygg och ren kod\" går lite
                    hand i hand. Jag är beredd att hålla med här, just för att jag under testning av min egen kod sett hur strukturen av koden spelar in när den ska testas.
                    Och mer strukturerad kod känns väl generellt snyggare?! Jag tror absolut så!
                </p>
                
                <strong>TIL</strong><br>
                <p>
                    - Vad PHPUnit och PHPdoc är, och hur de kan användas.<br>
                    - Dessutom har jag fått en inblick i hur mockning fungerar i PHP.<br>
                </p>
            </p>
        </div>
        <div>
            <h3 id=\"kmom05\">Kmom05</h3>
            <p>
                <strong>Symfony/doctrine</strong><br>
                <p>
                    Att arbeta igenom övningen gick bra. Likt tidigare övningar var den tydlig, enkel att följa och gav relevanta lästips längs vägen.<br>
                    Något jag noterade, som gick smidigt att arbeta igenom, var att delar av filerna behövde justeras något för att fungera med mitt personliga namespace. 
                    I de fall där jag missat att lägga in mitt namespace i någon konfiguration, gav symfony tydlig feedback om var jag behövde gå in och peta för att 
                    få alla delar att fungera tillsammans.
                </p>
                
                <strong>Applikation</strong><br>
                <p>
                    Mitt primära fokus till en början var att få alla delar i kravet på plats och se så de fungerade som önskat. Med allt på plats ville jag se till att 
                    det var smidigt att navigera mellan de olika delarna för att få ett naturligt flöde.

                </p>

                <strong>CRUD och ORM</strong><br>
                <p>
                    Även denna del kändes smidig att arbeta med. Personligen anser jag att det är skönt att ha fått lära sig databasdelarna tidigare,
                    för att förstå vad som sker, även om det i detta fall inte känns fullt nödvändigt (nåja, nödvändigt är det nog, men inte avgörande) 
                    för att faktiskt arbeta med kursmomentet.<br>
                    ORM som helhet känns smidigt på många sätt, men jag upplever även att det är något jag behöver läsa mer om, för att fullt förstå
                    och greppa alla delar och hur allt hänger ihop. Återigen, att arbeta med kursmomentet gick smidigt och jag tycker mig ha förstått grunden,
                    men det är många delar som jag känner att jag vill läsa mer om för att känna att jag fullt greppar hur allt samspelar.<br> Samtidigt är det 
                    nog ingen som förväntar sig att man ska vara fullärd efter ett kursmoment, så detta får adderas till sommarens läslista för mer insikt!
                     
                </p>
                
                <strong>TIL</strong><br>
                <p>
                    - Att en integer kan ha en gräns, och att denna gräns kan skilja sig beroende på miljö. 
                    Vilket ledde till att mitt ISBN inte kunde sättas till <code>integer</code>, utan behövde ändras till <code>string</code>.<br>
                </p>
                
                <strong>Övrigt</strong><br>
                <p>
                    Min lösning för <code>library/reset</code> är troligen inte helt ideal, det finns nog bättre sätt att lösa den delen.<br>
                    Jag valde dock att gå på \"en lösning som funkar\" då denna del var optionell och mitt mål med den delen var att få ett snabbt sätt 
                    att återställa databasen vid testning.<br>
                    Min lösning uppfyller mina egna krav och får därför anses god nog i detta sammanhang.
                </p>
            </p>
        </div>
        <div>
            <h3 id=\"kmom06\">Kmom06</h3>
            <p>
                <strong>PHPmetrics</strong><br>
                <p>
                    Jag tycker det var lärorikt att arbeta med verktyget. Att få en uppfattning om koden med hjälp av bilder och siffror var något
                    som gav mig en bättre bild av min kod som helhet.
                </p>
                
                <strong>Scrutinizer</strong><br>
                <p>
                    Även detta verktyg upplevde jag lärorikt och hjälpsamt, kanske ännu mer än föregående, då jag upplevde feedbacken från detta
                    ännu tydligare och rakt på sak (till exempel issues-delen kändes väldigt tydlig att ta till sig). Dock handlar nog den upplevelsen om
                    en helhetsförståelse för respektive verktyg också, där jag möjligen hade lättare att ta till mig Scrutinizer i stort.

                </p>

                <strong>Kodkvalitet</strong><br>
                <p>
                    Generellt tänker jag att kodkvaitet är viktigt och säger något om programmet, men som nämnt i uppgiften tror jag inte det är ett 
                    absolut facit. Jag tror dock att på en mer oerfaren nivå är det viktigare att aktivt arbeta med dessa delar, för att få en förståelse 
                    och en grund. Medan det på en mer erfaren nivå troligen är något som kommer att hänga med mer undermedvetet. Sedan om man tänker badges,
                    skulle jag ha två snarlika projekt framför mig där den ena har högre betyg, grönare fält och så vidare, så skulle jag troligen bli mer
                    lockad att läsa vidare om det projektet först.<br>
                    Under kursmomentets gång har jag dock fått se exempel på CImage (som jag använt i designkursen) och där sett att CImage inte presterar 
                    särskilt högt vad gäller badges.<br>
                     - Fungerade CImage som förväntat i desginkursen? Ja.<br>
                     - Hade jag under designkursen kunnat pekat ut Cimage som något som troligen hade låga värden vad gäller badges? Nej.<br>
                    Så kontentan blir att kodkvaitet säger något, men inte allt.
                </p>
                
                <strong>TIL</strong><br>
                <p>
                    - Hur man kan arbeta med automatiserade tester för att utvärdera sin kod.<br>
                    - Vad PHPMetrics och Scrutinizer är, och en inblick i den roll sådana verktyg kan spela.
                </p>
            </p>
        </div>
        <div>
            <h3 id=\"kmom07-10\" >Kmom07-10</h3>
            <p>
                Redovisningstext för detta kmom kommer här.
            </p>
        </div>
    </div>
{% endblock %}", "Shared/report.html.twig", "/home/caas23/dbwebb-kurser/mvc/me/report/templates/Shared/report.html.twig");
    }
}
