<?php
// Riscrivere questa pagina del sito google
// 	https://policies.google.com/faq.
// Ci sono diverse domande con relative risposte. Gestire il “Database” e la visualizzazione di queste domande e risposte con PHP
// DATABASE CONTENENTE DOMANDA E RISPOSTA(UNO O + PARAGRAFI)
$db = [
    [
        // QUESTION #1
        'question' => 
            'Come state implementando la recente decisione della Corte di giustizia dell&apos;Unione europea &lpar;CGUE&rpar; relativa al diritto all&apos;oblio&quest;',
        'answer' => [
            'La recente <a href="#">decisione della Corte di giustizia dell&apos;Unione europea</a> ha profonde conseguenze per i motori di ricerca in Europa&period; La Corte ha stabilito che alcuni utenti hanno il diritto di chiedere ai motori di ricerca come Google di rimuovere risultati relativi a chiavi di ricerca che includono il proprio nome&period; Per poter essere rimossi&comma; i risultati visualizzati devono essere inadeguati&comma; irrilevanti o non più rilevanti&comma; o eccessivi&period;',
            "Da quando questa decisione è stata pubblicata il 13 maggio 2014, abbiamo lavorato incessantemente per uniformarci a essa&period; Si tratta di una procedura complessa perché dobbiamo valutare ogni singola richiesta e effettuare un bilanciamento tra il diritto dell'individuo a controllare i suoi dati personali ed il diritto di tutti di conoscere e distribuire le informazioni&period;",
            "Per presentare una richiesta di rimozione&comma; compila questo <a href='#'>modulo web&period;</a> Riceverai una risposta automatica che conferma la ricezione della tua richiesta&period; Dopodiché valuteremo il tuo caso &lpar;tieni presente che potrebbe occorrere un po' di tempo perché abbiamo già ricevuto tante richieste simili)&period; Nel valutare la richiesta&comma; considereremo se i risultati includono informazioni obsolete relative alla tua vita privata&period; Considereremo inoltre se vi è un interesse pubblico a che le informazioni rimangano nei nostri risultati delle ricerche&comma; ad esempio se riguardano frodi finanziarie&comma; negligenza professionale&comma; condanne penali o la tua condotta pubblica in relazione a un pubblico ufficio &lpar;eletto o non eletto&rpar;&period; Queste valutazioni sono complesse e&comma; in quanto organizzazione privata&comma; potremmo non essere nella posizione giusta per prendere decisioni in merito al tuo caso&period; Se non sei d'accordo con la nostra valutazione&comma; puoi rivolgerti all'Autorità garante per la protezione dei dati personali nel tuo paese&period;",
            "Nei prossimi mesi lavoreremo a stretto contatto con le autorità per la protezione dei dati e con altre autorità per perfezionare il nostro approccio&period; La decisione della CGUE rappresenta un cambiamento significativo per i motori di ricerca&period; Siamo preoccupati per le sue conseguenze&comma; ma riteniamo anche che sia importante rispettare la decisione della Corte e ci stiamo adoperando per predisporre una procedura conforme alla legge&period;",
            "Quando cerchi un nome&comma; potresti trovare una notifica in cui viene spiegato che i risultati potrebbero essere stati modificati nel rispetto delle leggi europee per la protezione dei dati&period; Mostriamo questa notifica agli utenti europei quando cercano la maggior parte dei nomi&comma; non soltanto le pagine che sono state soggette a una rimozione&period;"
        ]
    ],
    //QUESTION #2
    [
        'question' => 
            "Come fa Google a proteggere la mia privacy e a tenere le mie informazioni al sicuro?",
        'answer' => [
            "Sappiamo che la sicurezza e la privacy sono importanti per te e lo sono anche per noi&period; Per noi è imperativo offrire un'elevata sicurezza e assicurarti che le tue informazioni sono al sicuro e accessibili quando ne hai bisogno&period;",
            "Siamo costantemente al lavoro per garantire un'elevata sicurezza, proteggere la tua privacy e rendere Google ancora più efficace ed efficiente per te&period; Spendiamo centinaia di milioni di dollari ogni anno per la sicurezza e ci avvaliamo di esperti di fama mondiale in materia di sicurezza dei dati per mantenere le tue informazioni al sicuro&period; Abbiamo inoltre sviluppato strumenti per la sicurezza e la privacy di facile utilizzo come Google Dashboard&comma; la verifica in due passaggi e Impostazioni annunci&period; Così&comma; per quanto riguarda le informazioni che condividi con Google&comma; hai il massimo controllo&period;",
            "Puoi leggere ulteriori informazioni sulla sicurezza online&comma; incluso come proteggere te e la tua famiglia online&comma; nel <a href='#'>Centro Google per la sicurezza online&period;</a>",
            "<a href='#'>Scopri</a> quali misure adottiamo per garantire protezione e sicurezza alle tue informazioni personali&comma; lasciando a te il controllo&period;"
        ]
    ],
    //QUESTION #3
    [
        'question' => 
            "Perché il mio account è associato a un paese?",
        'answer' => [
            "Il tuo account è associato a un paese &lpar;o territorio&rpar; nei Termini di servizio per poter stabilire due cose&colon;",
            [
                #1.
                [
                    'title' => 'La società consociata Google che offre i servizi&comma; tratta le tue informazioni ed è responsabile del rispetto delle leggi sulla privacy vigenti&period; Generalmente Google offre i propri servizi per i consumatori tramite una delle due società seguenti&colon;',
                    'subList' => [
                        #a.
                        "Google Ireland Limited, se gli utenti sono residenti nello Spazio economico europeo &lpar;paesi dell'Unione europea&comma; oltre a Islanda&comma; Liechtenstein e Norvegia&rpar; o in Svizzera&period;",
                        #b.
                        'Google LLC, con sede negli Stati Uniti&comma; per il resto del mondo&period;'
                    ],
                ],
                #2.
                [
                    'title' => 'La versione dei termini che regola il nostro rapporto&comma; che può variare in base alle leggi locali&period;'
                ],
            ],
            "<a href='#'>Tieni</a> presente che i servizi Google sono fondamentalmente gli stessi a prescindere dalla società consociata che li offre o dal paese a cui è associato il tuo account&period;"
        ],
        'subContainer' => [
            'title' => 'Stabilire il paese associato al tuo account',
            'paragraphs' => [
                "Quando crei un nuovo Account Google, lo associamo a un paese in base a dove è stato creato. Per quanto riguarda gli account creati almeno un anno fa, usiamo il paese da cui accedi solitamente ai servizi Google, in genere i servizi in cui hai trascorso più tempo nell'ultimo anno.",
                "I viaggi frequenti solitamente non influiscono sul paese associato al tuo account. Se ti trasferisci in un altro paese, potrebbe occorrere circa un anno per aggiornare l'associazione del paese.",
                "Se il paese associato al tuo account non corrisponde al tuo paese di residenza, il motivo potrebbe essere la differenza tra il paese in cui lavori e il paese in cui risiedi, l'installazione di una rete privata virtuale (VPN) per mascherare il tuo indirizzo IP oppure la residenza vicino a un confine territoriale. <a href='#'>Contattaci</a> se ritieni che il paese associato al tuo account sia sbagliato."
            ],
        ],
    ],
    //QUESTION #4
    [
        'question' => 
            "Come faccio a rimuovere informazioni su di me dai risultati di ricerca di Google?",
        'answer' => [
            "I risultati di ricerca di Google rispecchiano i contenuti pubblicamente disponibili sul Web&period; I motori di ricerca non possono rimuovere i contenuti direttamente dai siti web&comma; quindi rimuovere risultati di ricerca da Google non consente di rimuovere i contenuti dal Web&period; Se desideri rimuovere qualcosa dal Web&comma; devi <a href='#'>contattare il webmaster</a> del sito su cui sono pubblicati i contenuti e chiedergli di apportare una modifica&period; Inoltre&comma; se&comma; ai sensi delle leggi europee per la protezione dei dati&comma; desideri richiedere la rimozione di determinate informazioni su di te visualizzate nei risultati di ricerca di Google&comma; <a href='#'>fai clic qui&period;</a> Una volta che i contenuti saranno stati rimossi e che Google avrà rilevato l'aggiornamento&comma; le informazioni non verranno più visualizzate nei risultati di ricerca di Google&period; In caso di una richiesta di rimozione urgente&comma; è inoltre possibile <a href='#'>visitare la nostra pagina di assistenza per avere ulteriori informazioni&period;</a>"
        ]
    ],
    //QUESTION #5
    [
        'question' => 
            "Quando faccio clic sui risultati della Ricerca Google, le mie chiavi di ricerca vengono inviate ai siti web?",
        'answer' => [
            "In alcuni casi sì&period; Quando fai clic su un risultato della Ricerca Google, il tuo browser web potrebbe reindirizzare alla pagina web di destinazione anche l'indirizzo Internet&comma; o URL&comma; della pagina dei risultati di ricerca sotto forma di <a href='#'>URL referrer&period;</a> Talvolta&comma; l'URL della pagina dei risultati di ricerca potrebbe contenere la query di ricerca che hai inserito&period; Se utilizzi la ricerca SSL &lpar;la funzione di ricerca criptata di Google&rpar;&comma; nella maggior parte dei casi i termini di ricerca non vengono inviati come parte dell'URL negli URL referrer&period; Questo comportamento può fare eccezione&comma; ad esempio se utilizzi alcuni browser meno diffusi&period; Ulteriori informazioni sulla ricerca SSL sono disponibili <a href='#'>qui&period;</a> Le query di ricerca o le informazioni contenute nell'URL referrer potrebbero essere disponibili mediante Google Analytics o un'API &lpar;Application Programming Interface)&period; Inoltre&comma; gli inserzionisti potrebbero ricevere informazioni relative all' esatte parole chiave che hanno determinato il clic su un annuncio&period;"
        ]
    ],
];
// var_dump($db);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Domande frequenti - Privacy e termini - Boolean</title>
    <!-- link mine css -->
    <link rel="stylesheet" href="./style/style.css">
</head>
<body>
    <?php
    /**
     * to-do: 
     * header e footer
     * 
     * 
     * inserire in database sub-paragraph e stampare in html
     */
    ?>
    <!-- HEADER -->
    <header class="header"></header>
    <!-- /HEADER -->
    <!-- MAIN -->
    <main class="main">
        <div class="container">
            <!-- devo scorrere tutto il database e per ogni domanda stampare la/le risposta/e -->
            <?php 
            foreach ($db as $faq) {
                echo '<section>';
                //chiavi di db -> integer 0 -> max
                foreach ($faq as $ansQue => $value) {
                    //chiave di faq=$ansQue -> question/answer
                    if ($ansQue === 'question') {
            ?>
                        <!-- DOMANDA -->
                        <h2><?=$value?></h2>
                    <?php
                    // $value, con $ansque === answer rappresente tutte le risposte necessarie alla stampa
                    } elseif($ansQue === 'answer') {
                        foreach($value as $parList) {
                            if(is_string($parList)) {
                    ?>
                                <!-- RISPOSTA/RISPOSTE -->
                                <p><?=$parList;?></p>
                    <?php
                            } elseif(is_array($parList)) {
                                // var_dump($parList);
                    ?>
                                <ol class="list-num-index">
                                    <?php
                                    foreach ($parList as $item) {
                                    ?>
                                        <li>
                                            <p><?=$item['title']?></p>
                                            <?php
                                            if(isset($item['subList'])) {
                                            ?>
                                                <ol class="list-str-index">
                                                    <?php
                                                    foreach ($item['subList'] as $subParag) {
                                                    ?>
                                                        <li><p><?=$subParag?></p></li>
                                                    <?php
                                                    }
                                                    ?>
                                                </ol>
                                            <?php
                                            }
                                            ?>
                                        </li>
                                    <?php
                                    }
                                    ?>
                                </ol>
            <?php
                            }
                        }
                    } elseif($ansQue === 'subContainer' && isset($ansQue)) {
            ?>
                        <h3><?=$value['title']?></h3>
                        <?php
                        foreach ($value['paragraphs'] as $par) {
                        ?>
                            <p><?=$par?></p>
                        <?php
                        }
                    }
                }
                echo '</section>';
            }
                        ?>
        </div>
    </main>
    <!-- MAIN -->
    <!-- /FOOTER -->
    <footer class="footer"></footer>
    <!-- /FOOTER -->

</body>
</html>