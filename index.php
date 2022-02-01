<?php
// Riscrivere questa pagina del sito google
// 	https://policies.google.com/faq.
// Ci sono diverse domande con relative risposte. Gestire il “Database” e la visualizzazione di queste domande e risposte con PHP
// DATABASE CONTENENTE DOMANDA E RISPOSTA(UNO O + PARAGRAFI)
$db = [
    /**
     * to-do: riempire con tutte le domande e le risposte
     * cambiare caratteri speciali con codice html
     * 
     * gestire risposta con lista ordinata 
     *      se answer[indice] stringa => stampa <p>
     *           //           array => stampa <ol>
     * dovrebbe essere possibile gestirlo senza problemi dopo
     * 
     * &apos; = '
     * &period; = .
     * &quest; = ?
     * &comma; = ,
     *  */
    [
        // QUESTION #1
        'question' => 
            'Come state implementando la recente decisione della Corte di giustizia dell&apos;Unione europea &lpar;CGUE&rpar; relativa al diritto all&apos;oblio&quest;',
        'answer' => [
            'La recente decisione della Corte di giustizia dell&apos;Unione europea ha profonde conseguenze per i motori di ricerca in Europa&period; La Corte ha stabilito che alcuni utenti hanno il diritto di chiedere ai motori di ricerca come Google di rimuovere risultati relativi a chiavi di ricerca che includono il proprio nome&period; Per poter essere rimossi&comma; i risultati visualizzati devono essere inadeguati&comma; irrilevanti o non più rilevanti&comma; o eccessivi&period;',
            "Da quando questa decisione è stata pubblicata il 13 maggio 2014, abbiamo lavorato incessantemente per uniformarci a essa. Si tratta di una procedura complessa perché dobbiamo valutare ogni singola richiesta e effettuare un bilanciamento tra il diritto dell'individuo a controllare i suoi dati personali ed il diritto di tutti di conoscere e distribuire le informazioni.",
            "Per presentare una richiesta di rimozione, compila questo modulo web. Riceverai una risposta automatica che conferma la ricezione della tua richiesta. Dopodiché valuteremo il tuo caso (tieni presente che potrebbe occorrere un po' di tempo perché abbiamo già ricevuto tante richieste simili). Nel valutare la richiesta, considereremo se i risultati includono informazioni obsolete relative alla tua vita privata. Considereremo inoltre se vi è un interesse pubblico a che le informazioni rimangano nei nostri risultati delle ricerche, ad esempio se riguardano frodi finanziarie, negligenza professionale, condanne penali o la tua condotta pubblica in relazione a un pubblico ufficio (eletto o non eletto). Queste valutazioni sono complesse e, in quanto organizzazione privata, potremmo non essere nella posizione giusta per prendere decisioni in merito al tuo caso. Se non sei d'accordo con la nostra valutazione, puoi rivolgerti all'Autorità garante per la protezione dei dati personali nel tuo paese.",
            "Nei prossimi mesi lavoreremo a stretto contatto con le autorità per la protezione dei dati e con altre autorità per perfezionare il nostro approccio. La decisione della CGUE rappresenta un cambiamento significativo per i motori di ricerca. Siamo preoccupati per le sue conseguenze, ma riteniamo anche che sia importante rispettare la decisione della Corte e ci stiamo adoperando per predisporre una procedura conforme alla legge.",
            "Quando cerchi un nome, potresti trovare una notifica in cui viene spiegato che i risultati potrebbero essere stati modificati nel rispetto delle leggi europee per la protezione dei dati. Mostriamo questa notifica agli utenti europei quando cercano la maggior parte dei nomi, non soltanto le pagine che sono state soggette a una rimozione."
        ]
    ],
    //QUESTION #2
    [
        'question' => 
            "Come fa Google a proteggere la mia privacy e a tenere le mie informazioni al sicuro?",
        'answer' => [
            "Sappiamo che la sicurezza e la privacy sono importanti per te e lo sono anche per noi. Per noi è imperativo offrire un'elevata sicurezza e assicurarti che le tue informazioni sono al sicuro e accessibili quando ne hai bisogno.",
            "Siamo costantemente al lavoro per garantire un'elevata sicurezza, proteggere la tua privacy e rendere Google ancora più efficace ed efficiente per te. Spendiamo centinaia di milioni di dollari ogni anno per la sicurezza e ci avvaliamo di esperti di fama mondiale in materia di sicurezza dei dati per mantenere le tue informazioni al sicuro. Abbiamo inoltre sviluppato strumenti per la sicurezza e la privacy di facile utilizzo come Google Dashboard, la verifica in due passaggi e Impostazioni annunci. Così, per quanto riguarda le informazioni che condividi con Google, hai il massimo controllo.",
            "Puoi leggere ulteriori informazioni sulla sicurezza online, incluso come proteggere te e la tua famiglia online, nel Centro Google per la sicurezza online.",
            "Scopri quali misure adottiamo per garantire protezione e sicurezza alle tue informazioni personali, lasciando a te il controllo."
        ]
    ]
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
</head>
<body>
    <?php
    /**
     * to-do: 
     * header e footer
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
                //chiavi di db -> integer 0 -> max
                // var_dump($faq);
                foreach ($faq as $ansQue => $value) {
                    //chiave di faq=$ansQue -> question/answer
                    if ($ansQue === 'question') {
                    ?>
                        <h2><?=$value?></h2>
                    <?php
                    }
                }
            }
            ?>
            <!-- DOMANDA -->
            <!-- RISPOSTA/RISPOSTE -->
        </div>
    </main>
    <!-- MAIN -->
    <!-- /FOOTER -->
    <footer class="footer"></footer>
    <!-- /FOOTER -->

</body>
</html>