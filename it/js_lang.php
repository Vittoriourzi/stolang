<?php
    $lang['auth-wrong-user']="Credenziali errate, riprova";

    $lang['auth-fb-continue-as']='<i class="left fa fa-facebook-official" aria-hidden="true"></i>Continua come <b>{{$1}}</b>';

    $lang['advice']="Consigli";
    $lang['what_fix']='Cosa risolvere';
    $lang['score']='Punteggio';
    $lang['final_score']='Punteggio SEO';
    $lang['version_mobile']='Mobile';
    $lang['version_desktop']='Desktop';
    $lang['err_title_too_large']="Il titolo sembra troppo lungo deve contenere tra <b>55</b> ed i <b>66</b>  caratteri";
    $lang['err_title_too_small']="Il titolo sembra troppo corto deve contenere tra <b>55</b> ed i <b>66</b>  caratteri";
    $lang['err_title_misskeywordsh1']='Nel titolo mancano alcune keywords <code>[{{$2}}]</code> contenute nel tag <b>&lt;h1&gt;</b> <blockquote><b>&lt;h1&gt;</b>{{$1}}<b>&lt;/h1&gt;</b></blockquote>E\' sempre consigliabile mantenere il tag title ed il tag h1 uguali o molto simili per aumentare il <i>ranking target quality</i> da parte di google.';
    $lang['err_title_miss']="Manca il tag title nella tua pagina";
    $lang['err_title_missh1']="Manca il tag <b>&lt;H1&gt;</b> nella tua pagina. <span>Inseriscilo e fai in modo che i due tag abbiano un contenuto testuale molto simile. </span>";
    $lang['err_description_too_large']="La tua descrizione è troppo lunga deve contenere tra <b>140</b> ed i <b>170</b>  caratteri";
    $lang['err_description_too_small']="La tua descrizione è troppo corta  deve contenere tra <b>140</b> ed i <b>170</b> caratteri";
    $lang['err_description_miss']="Manca il tag meta con l'attributo description nella tua pagina";
    $lang['err_h1_multiple']='Sono presenti <b>&lt;h1&gt;</b> multipli all\'interno della tua pagina. Questo potrebbe influire negativamente sulla tua indicizzazione: <blockquote>{{for}}<li><b>&lt;h1&gt;</b>{{$n}}<b>&lt;/h1&gt;</b></li>{{endfor}}</blockquote>';
    $lang['err_h1_duplicate']='Sono presenti <b>&lt;H1&gt;</b> duplicati all\'interno della tua pagina. Questo potrebbe influire negativamente sulla tua indicizzazione: <blockquote>{{for}}<li><b>&lt;H1&gt;</b>{{$n}}<b>&lt;/H1&gt;</b></li>{{endfor}}</blockquote>';
    $lang['err_h2_duplicate']='Sono presenti <b>&lt;h2&gt;</b> duplicati all\'interno della tua pagina. Questo potrebbe influire negativamente sulla tua indicizzazione: <blockquote>{{for}}<li><b>&lt;h2&gt;</b>{{$n}}<b>&lt;/h2&gt;</b></li>{{endfor}}</blockquote>';

    $lang['err_h1_misskeywordstitle']='Nel tag <b>&lt;h1&gt;</b> mancano alcune keywords <code>[{{$2}}]</code> contenute nel tag <b>&lt;title&gt;</b> <blockquote><b>&lt;title&gt;</b>{{$1}}<b>&lt;/title&gt;</b></blockquote>E\' sempre consigliabile mantenere il tag title ed il tag h1 uguali o molto simili per aumentare il <i>ranking target quality</i> da parte di google.';

    $lang['err_h1_miss']="Manca il tag <b>&lt;h1&gt;</b> nella tua pagina. ";
    $lang['err_h2_toomuch']="Ci sono troppi tag <b>&lt;h2&gt;</b> nella tua pagina. E' consigliato non superare oltre i 2-3 sottotitoli <b>&lt;h2&gt;</b> per ogni pagina.";
    $lang['err_h2_miss']="Mancano i tag <b>&lt;h2&gt;</b> all'interno della tua pagina";
    $lang['err_images_miss_alt']="Nelle immagini non è stato curato l'attributo alt per migliorarne l'individuazione dai motori di ricerca";
    $lang['err_a_miss_title']="In alcuni dei dei tuoi links (tag <b>&lt;A&gt;</b>) non è stato curato l'attributo title che permette di migliorare l'usabilità.";
    $lang['err_urlaction_not_friendly']='Alcune parti del tuo url non sono SEO FRIENDLY per i motori di ricerca. Nell\'ambiente SEO si consiglia di utilizzare sempre il trattino "-" e non l\'underscore "_" per separare le diverse keyword all\'interno della URL. In oltre è consigliabile avere una struttura che contenga tutte le lettere dalla A alla Z, tutti le cifre da 0 a 9 e solo ed esclusivamente i seguenti simboli: .(punti) -(trattini) e /(slash).';

    $lang['err_url_misskeywordstitle']='Nella tua <b>URL</b> mancano alcune keywords <code>[{{$2}}]</code> contenute nel tag <b>&lt;{{$4}}&gt;</b> <blockquote><b>&lt;{{$4}}&gt;</b>{{$1}}<b>&lt;/{{$4}}&gt;</b></blockquote>E\' sempre consigliabile inserire le keywords per che aumentano l\'indicizzazione rispetto un determinato argomento presente nel sito. Nel caso si tratti di una index page allora questo aspetto risulterà meno pesato. In caso contrario è sempre consigliabile riscrivere l\'url in modo tale che contenga parti del titolo <pre><br> Esempio di struttura ottimale: <br> {{$3}} ';

    $lang['err_url_misskeywordstitle_index']='Nella tua <b>URL</b> mancano alcune keywords <code>[{{$2}}]</code> contenute nel tag <b>&lt;{{$3}}&gt;</b> <blockquote><b>&lt;{{$3}}&gt;</b>{{$1}}<b>&lt;/{{$3}}&gt;</b></blockquote>E\' sempre consigliabile inserire le keywords per che aumentano l\'indicizzazione rispetto un determinato argomento presente nel sito. Nel caso si tratti di una index page allora questo aspetto risulterà meno pesato. In caso contrario è sempre consigliabile riscrivere l\'url in modo tale che contenga parti del titolo';

    $lang['err_serp_fixother']="Per migliorare la tua anteprima di ricerca devi lavorare per aumentare il punteggi ottenuti con: <ul>tag <b>&lt;title&gt;</b>, il tag  <b>&lt;meta name=\"description\" .. &gt;</b> e la tua <b>URL</b></ul>";

    $lang['err_microdata_missingall']="In questa pagina mancano i tag microdata offerti da <a href=\"http://schema.org\">http://schema.org</a> inseriscili nella tua pagina per aumentare il tuo impatto visivo sui motori di ricerca.";

    $lang['err_metarobots_noindex']="Il meta name[Robots] è impostato sul valore NOINDEX, ciò renderà impossibile l'indicizzazione sui motori di ricerca";
    $lang['err_sitemap_notfounded']="Non è stata trovata nessuna sitemap su questo sito";
    $lang['err_robots_novalid']="Il file robots.txt non è valido.";
    $lang['err_robots_notfounded']="Non è stato trovato nessun file Robots.txt su questo sito";
    /*contents*/
    $lang['err_ratioTextCode_lowleveltext']="Questa pagina presenta un basso contenuto testuale. I motori di ricerca potrebbero non indicizzare bene questa pagina perchè priva di un contenuto interessante.";
    $lang['err_h1Coherence_missh1']="Prima di lavorare su queste keywords devi inserire il tag h1 <small>(Vedi scheda <i class=\"tiny material-icons\">&#xE86F;</i> base)</small>";
    $lang['err_h1Coherence_misskey']='La keyword <b>{{$1}}</b> non è presente in maniera sufficente nella pagina';
    $lang['err_titleCoherence_misskey']='La keyword <b>{{$1}}</b> non è presente in maniera sufficente nella pagina';
    $lang['err_titleCoherence_misstitle']="Prima di lavorare su queste keywords devi inserire il tag title <small>(Vedi scheda <i class=\"tiny material-icons\">&#xE86F;</i> base)</small>";
    $lang['err_wordsLevel_lowleveltxt']="Aumenta il contenuto testuale della tua pagina";

    /*<!---suggerimenti--->*/
    $lang['sugg_microdata']='<h4><img class="text-img img-xs img-responsive" src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/2f/Google_2015_logo.svg/1000px-Google_2015_logo.svg.png"> spiega cosa sono i microdata</h4><ul>
    <li>
    <p><a href="http://schema.org/docs/gs.html#microdata_how">Microdata</a> and
    <a href="http://www.w3.org/TR/rdfa-lite/">RDFa</a> define new HTML attributes that let you indicate what
    schema.org field names correspond with what user-visible text on the page.</p>
    </li>
    <li>
    <p><a href="http://www.w3.org/TR/json-ld/">JSON-LD</a> is the newest and simplest markup format:
    it lets you embed
    a block of JSON data inside a <code>script</code> tag anywhere in the HTML. Since the data
    does not have to be interleaved with the user-visible text, it\'s much easier
    to express nested data items (say, the Country of a PostalAddress of a
    MusicVenue of an Event). Also, Google can read JSON-LD data even when
    it is dynamically injected into the page\'s contents, such as by Javascript code
    or embedded "widgets".
    </p><p>Google is in the process of adding JSON-LD support to more markup-powered features.
    So far, JSON-LD is supported for all Knowledge Graph features, sitelink
    search boxes, Event Rich Snippets, and Recipe Rich Snippets; Google recommends the use of JSON-LD
    for those features. For the remaining Rich Snippets types and breadcrumbs,
    Google recommends the use of microdata or RDFa.</p>
    </li>
    </ul>';
    $lang['sugg_title']="";
    $lang['sugg_title_google']="<h4>I consigli di <img class=\"text-img img-xs img-responsive\" src=\"https://upload.wikimedia.org/wikipedia/commons/thumb/2/2f/Google_2015_logo.svg/1000px-Google_2015_logo.svg.png\"> su come ottimizzare il tag Title</h4>
    <ul>
  <li><strong>Assicurati che ogni pagina del sito abbia un titolo specificato nel tag <code>&lt;title&gt;</code></strong>. Se hai un sito di grandi dimensioni e temi di avere dimenticato un titolo in qualche punto, nella pagina dei <a href=\"https://support.google.com/webmasters/answer/answer.py?answer=80407\">suggerimenti HTML</a> in Search Console vengono elencati i tag <code>&lt;title&gt;</code> mancanti o potenzialmente problematici sul tuo sito.</li>
  <br>
  <li>I titoli della pagina devono essere <strong>descrittivi e concisi</strong>. Evita descrizioni vaghe come <code>\"Home\"</code> per indicare l'home page o <code>\"Profilo\"</code> per fare riferimento al profilo specifico di una persona. Evita anche titoli inutilmente lunghi o dettagliati che probabilmente verranno troncati nella visualizzazione dei risultati di ricerca.</li>
  <br>
  <li>Evita l'<strong>utilizzo di parole chiave in eccesso</strong>. A volte è utile avere pochi termini descrittivi nel titolo, ma non c'è motivo per cui le stesse parole o frasi vengano ripetute più volte. Un titolo <code>\"Foobar, foo bar, foobar (pl.), foo bar (pl.)\"</code> non aiuta l'utente e questo tipo di <a href=\"https://support.google.com/webmasters/answer/answer.py?answer=66358\">parole chiave in eccesso</a> può far credere agli utenti e a Google che i risultati contengano spam.</li>
  <br>
  <li>Evita <strong>titoli ripetuti o standard</strong>. È importante avere titoli distinti e descrittivi per ogni pagina del sito. Ad esempio, intitolare con \"Prodotti in vendita a buon prezzo'' tutte le pagine di un sito commerciale impedisce agli utenti di distinguere le differenze tra una pagina e l'altra. Non sono adatti nemmeno i titoli lunghi che variano solo per un'informazione (titoli ''standard''); ad esempio, un titolo standard come <code>\"&lt;nome band&gt; - Guarda video, testo, poster, album, recensioni e concerti\"</code> contiene molto testo non informativo. Una soluzione è l'aggiornamento dinamico del titolo affinché rispecchi meglio il contenuto corrente della pagina: ad esempio, includi le parole ''video'', ''testi'' e così via solo se quella pagina specifica contiene video o testi. Un'altra possibilità è utilizzare <code>\"&lt;nome band&gt;\"</code> come titolo conciso e le meta descrizioni (vedi di seguito) per descrivere i contenuti del sito. Nella pagina <a href=\"https://support.google.com/webmasters/answer/answer.py?answer=80407\">Suggerimenti HTML</a> in Search Console vengono elencati i titoli duplicati che Google ha rilevato nelle tue pagine.</li>
  <br>
  <li><strong>Contraddistingui i titoli</strong>, ma in modo conciso. Il titolo dell'home page del sito è adatto a includere alcune informazioni aggiuntive relative al sito, ad esempio <code>\"Sitosocialesempio, un posto dove incontrarsi e fare amicizia\".</code> Tuttavia, visualizzare questo testo nel titolo di ogni pagina del sito incide sulla leggibilità e sembra particolarmente ripetitivo se una stessa query restituisce diverse pagine del sito. In questo caso, valuta l'inclusione del nome del sito all'inizio o alla fine di ogni titolo della pagina, separandolo dal resto del titolo da un delimitatore (un trattino, i due punti o una barra verticale), come riportato di seguito:
    <pre>&lt;title&gt;Sitosocialesempio: registra un nuovo account.&lt;/title&gt;</pre>
  </li>
  <br>
  <li><strong>Fai attenzione a impedire ai motori di ricerca</strong> di eseguire la scansione delle pagine. L'utilizzo del protocollo <a href=\"http://code.google.com/web/controlcrawlindex/\" target=\"_blank\">robots.txt</a> nel sito può impedire a Google di effettuare la scansione delle pagine, ma non sempre riesce a impedire che vengano indicizzate. Ad esempio, Google può indicizzare una pagina scoperta seguendo il link dal sito di un'altra persona. Per visualizzare la pagina nei risultati di ricerca, Google deve visualizzare un titolo qualsiasi; poiché non può accedere ai contenuti della pagina, farà affidamento sui contenuti non appartenenti alla pagina come il testo di ancoraggio da altri siti. Per bloccare veramente l'indicizzazione di un URL, puoi utilizzare i <a href=\"https://support.google.com/webmasters/answer/answer.py?answer=93710\">metatag</a>.</li>
</ul>";
    $lang['sugg_description']='';
    $lang['sugg_description_google']="<h4><img class=\"text-img img-xs img-responsive\" src=\"https://upload.wikimedia.org/wikipedia/commons/thumb/2/2f/Google_2015_logo.svg/1000px-Google_2015_logo.svg.png\"> consiglia come creare meta descrizioni accurate</h4><ul>
  <li>Assicurati che <strong>ogni pagina del sito abbia una meta descrizione</strong>. Nella pagina <a href=\"https://support.google.com/webmasters/answer/answer.py?answer=80407\">Suggerimenti HTML</a> in Search Console vengono elencate le pagine in cui Google ha rilevato meta descrizioni mancanti o problematiche.</li>
  <br>
  <li><strong>Differenzia le descrizioni per le varie pagine.</strong> Descrizioni identiche o simili in ogni pagina di un sito non sono utili quando nei risultati web vengono visualizzate singole pagine. In questi casi, è meno probabile che venga pubblicato il testo standard. Dove possibile, crea descrizioni che illustrano in modo preciso la pagina specifica. Utilizza descrizioni a livello di sito nella home page o in altre pagine di aggregazione e descrizioni a livello di pagina altrove. Se non hai il tempo per creare una descrizione per ogni singola pagina, prova a impostare una priorità per i tuoi contenuti o perlomeno crea una descrizione per gli URL essenziali come la home page e le pagine visitate più frequentemente.</li>
  <br>
  <li><strong>Includi nella descrizione informazioni chiaramente codificate.</strong> Non è necessario che la meta descrizione sia rappresentata solo da una frase. Essa è anche il punto ideale per inserire dati strutturati sulla pagina. Ad esempio, notizie o post su blog possono indicare l'autore, la data di pubblicazione e informazioni sulle fonti. In tal modo, i potenziali visitatori otterranno informazioni molto pertinenti che altrimenti non potrebbero essere visualizzate nello snippet. Analogamente, nelle pagine dei prodotti, le informazioni chiave (prezzo, età, produttore) possono essere distribuite in tutta la pagina. Una meta descrizione accurata raggruppa tutti questi dati. Ad esempio, la seguente meta descrizione fornisce informazioni dettagliate su un libro.
    <pre>&lt;meta name=\"Description\" content=\"Autore: A.N. Autore,
Illustratore: P. Picture, Categoria: Libri, Prezzo: $ 17,99,
Lunghezza: 784 pagine\"&gt;</pre>

    <p>In questo esempio le informazioni sono chiaramente codificate e separate.</p>
  </li>
  <br>
  <li><strong>Genera le descrizioni a livello di programmazione.</strong> Per alcuni siti, come le fonti multimediali di notizie, la generazione di una descrizione accurata e unica per ogni pagina è facile: poiché ogni articolo è scritto a mano, è necessario un impegno minimo per aggiungere una descrizione composta da una frase. Nei siti basati su database di grandi dimensioni, come gli aggregatori di prodotti, scrivere a mano le descrizioni può risultare impossibile. Nel secondo caso, tuttavia, la generazione delle descrizioni a livello di programmazione può essere appropriata ed è consigliata. Le descrizioni accurate sono facilmente leggibili dall'utente e variate, come accennato nel primo punto sopra riportato. I dati specifici di una pagina citati nel secondo punto sono ideali per la generazione a livello di programmazione. Tieni presente che le meta descrizioni composte da lunghe stringhe di parole chiave non danno agli utenti una chiara idea dei contenuti della pagina ed è meno probabile che vengano visualizzate al posto di un regolare snippet.</li>
  <br>
  <li><strong>Utilizza descrizioni di qualità.</strong> Infine, assicurati che le descrizioni siano veramente espositive. Poiché le meta descrizioni non vengono inserite nelle pagine visualizzate dall'utente, è facile che questi contenuti vengano trascurati. Le descrizioni di alta qualità, tuttavia, possono essere visualizzate nei risultati di ricerca di Google e possono essere molto utili per migliorare la qualità e la quantità del traffico di ricerca.</li>
</ul>";
    $lang['sugg_images_attr_title']="The title attribute can be used to describe almost any HTML element. A beneficial way to use the title attribute for SEO purposes would be to use it in the link element to provide descriptive text within an anchor tag (which gives you more real estate for your targeted keyword phrases). I would suggest not to duplicate your anchor text (for usability purposes). It's supposed to provide supplementary information and let the users know where the link will direct them to if they click on it. When creating your link titles, optimize for keyword phrases you’re targeting on the linked to page (just as you would with anchor text). Search engines only use them in consideration to the page being linked to, not the page the link is on";
    $lang['sugg_h1']="";
    $lang['sugg_h2']="";
    $lang['sugg_images']="";
    $lang['sugg_url_seo_friendly']='Nell\'ambiente SEO si consiglia di utilizzare sempre il trattino "-" e non l\'underscore "_" per separare le diverse keyword all\'interno della URL. In oltre è consigliabile avere una struttura che contenga tutte le lettere dalla A alla Z, tutti le cifre da 0 a 9 e solo ed esclusivamente i seguenti simboli: .(punti) -(trattini) e /(slash).';

?>
