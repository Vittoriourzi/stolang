<?php
    $lang['auth-wrong-user']="Wrong credential, try again";

    $lang['auth-fb-continue-as']='<i class="left fa fa-facebook-official" aria-hidden="true"></i> Continue as <b>{{$1}}</b>';

    $lang['advice']="Advice";
    $lang['what_fix']='What fix';
    $lang['score']='Score';
    $lang['final_score']='SEO Score';
    $lang['version_mobile']='Mobile';
    $lang['version_desktop']='Desktop';
    $lang['err_title_too_large']="The title seems too long, it should be between <b>55</b> and <b>66</b> characters";
    $lang['err_title_too_small']="The title seems too short, it should be between <b>55</b> and <b>66</b> characters";
    $lang['err_title_misskeywordsh1']='The title lacks the keywords <code>[{{$2}}]</code> contained in the tag <b>&lt;h1&gt;</b> <blockquote><b>&lt;h1&gt;</b>{{$1}}<b>&lt;/h1&gt;</b></blockquote> Is always advisable mantain the tag title equal or similar to the tag h1 in order to increase the <i>ranking target quality</i> by Google.';
    $lang['err_title_miss']="Missing tag title in your page";
    $lang['err_title_missh1']="Missing tag <b>&lt;H1&gt;</b> in your page. <br>Enter it and make sure that the two tags have a very similar textual content. ";
    $lang['err_description_too_large']="Your description is too long and should contain between <b>140</b> and <b>170</b>  characters";
    $lang['err_description_too_small']="Your description is too short and should contain between <b>140</b> and <b>170</b> characters";
    $lang['err_description_miss']="Missing meta tags with the description attribute in your page.";
    $lang['err_h1_multiple']='Are present <b>&lt;h1&gt;</b> multiple inside of your page. This could adversely affect on your indexing: <blockquote>{{for}}<li><b>&lt;h1&gt;</b>{{$n}}<b>&lt;/h1&gt;</b></li>{{endfor}}</blockquote>';
    $lang['err_h1_duplicate']='Are present <b>&lt;H1&gt;</b> doubled within your page. This could adversely affect your indexing: <blockquote>{{for}}<li><b>&lt;H1&gt;</b>{{$n}}<b>&lt;/H1&gt;</b></li>{{endfor}}</blockquote>';
    $lang['err_h2_duplicate']='Are present <b>&lt;h2&gt;</b> doubled within your page. This could adversely affect your indexing: <blockquote>{{for}}<li><b>&lt;h2&gt;</b>{{$n}}<b>&lt;/h2&gt;</b></li>{{endfor}}</blockquote>';

    $lang['err_h1_misskeywordstitle']='In the tag <b>&lt;H1&gt;</b> missing the keywords <code>[{{$2}}]</code> conteined in the tag <b>&lt;title&gt;</b> <blockquote><b>&lt;title&gt;</b>{{$1}}<b>&lt;/title&gt;</b></blockquote>It is always advisavle to keep the tag title and the h1 tag the same or very similar to increase the <i>ranking target quality</i> by Google.';

    $lang['err_h1_miss']="Missing the tag <b>&lt;H1&gt;</b> on your page. ";
    $lang['err_h2_toomuch']="There are too much tag <b>&lt;H2&gt;</b> on your page. it is recommended not to exceed more than 2-3 h2 caption for each page to avoid a disambiguation of the content. ";
    $lang['err_h2_miss']="Missing tags <b>&lt;H2&gt;</b> within your page";
    $lang['err_images_miss_alt']="In the images it was not taken care of the alt attribute to increase the detection rate by search engines";
    $lang['err_a_miss_title']="In some of your links (tag &lt;A&gt;) it was not cured the title attribute that improves usabiliy.";
    $lang['err_urlaction_not_friendly']='
Some parts of your url are not SEO FRIENDLY for search engines. In the SEO environment it is recommended to always use the hyphen "-" and not the underscore "_" to separate the different keywords in the URL. In addition it is advisable to have a structure that contains all the letters from A to Z, all of the digits 0 to 9 and only and exclusively the following symbols: .(points) -(hyphen) and /(slash).';


    $lang['err_url_misskeywordstitle']='In your <b>URL</b> missing some keywords <code>[{{$2}}]</code> contained in the tag <b>&lt;title&gt;</b> <blockquote><b>&lt;title&gt;</b>{{$1}}<b>&lt;/title&gt;</b></blockquote>It is always advisable to insert the keywords that increase the the indexing than a certain topic in the site. In the case of an index page then this aspect will be less weighed. Otherwise it is always advisable to rewrite the URL so that it contains parts of the title <pre> <br> Example of optimal structure: <br> {{$3}} ';

    $lang['err_url_misskeywordstitle_index']='In your <b>URL</b> missing some keywords <code>[{{$2}}]</code> contained in the tag <b>&lt;title&gt;</b> <blockquote><b>&lt;title&gt;</b>{{$1}}<b>&lt;/title&gt;</b></blockquote>It is always advisable to insert the keywords that increase the the indexing than a certain topic in the site. In the case of an index page then this aspect will be less weighed. Otherwise it is always advisable to rewrite the URL so that it contains parts of the title';

    $lang['err_serp_fixother']="To improve your search preview you have to work to increase the scores obtained with: <ul>tag &lt;title&gt;, the tag &alt;meta description&gt; and your <b>URL</b></ul>";

    $lang['err_microdata_missingall']="This page missing tags offered by microdata <a href=\"http://schema.org\">http://schema.org</a>
    enter them on your page to increase your visual impact on the search engines.";

    $lang['err_metarobots_noindex']="The meta name[Robots]
    is set to NOINDEX value, this will prevent the indexing on search engines";
    $lang['err_sitemap_notfounded']="No sitemap of this site was found";
    $lang['err_robots_novalid']="The Robots.txt file is invalid.";
    $lang['err_robots_notfounded']="It was not found any Robots.txt file on this site";
    /*contents*/
    $lang['err_RatioTextCode_lowleveltext']="
    This page presents a low textual content. The search engines could not index properly this page because without any meaningful content.";
    $lang['err_h1Coherence_missh1']="
    Before working on these keywords you need to enter the h1 tag <small>(See card <i class=\"tiny material-icons\">&#xE86F;</i> base)</small>";
    $lang['err_h1Coherence_misskey']='The keyword <b>{{$1}}</b>
    is not present in sufficient manner in the page';
    $lang['err_titleCoherence_misskey']='The keyword <b>{{$1}}</b> is not present in sufficient manner in the page';
    $lang['err_titleCoherence_misstitle']="Prima di lavorare su queste keywords devi inserire il tag title <small>(Vedi scheda <i class=\"tiny material-icons\">&#xE86F;</i> base)</small>";
    $lang['err_wordsLevel_lowleveltxt']="Aumenta il contenuto testuale della tua pagina";

    /*<!---suggerimenti--->*/
    $lang['sugg_images_attr_title']="The title attribute can be used to describe almost any HTML element. A beneficial way to use the title attribute for SEO purposes would be to use it in the link element to provide descriptive text within an anchor tag (which gives you more real estate for your targeted keyword phrases). I would suggest not to duplicate your anchor text (for usability purposes). It's supposed to provide supplementary information and let the users know where the link will direct them to if they click on it. When creating your link titles, optimize for keyword phrases you’re targeting on the linked to page (just as you would with anchor text). Search engines only use them in consideration to the page being linked to, not the page the link is on";

    $lang['sugg_microdata']='<h4><img class="text-img img-xs img-responsive" src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/2f/Google_2015_logo.svg/1000px-Google_2015_logo.svg.png">
It explains what are the microdata.</h4><ul>
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
    $lang['sugg_title_google']="<h4><img class=\"text-img img-xs img-responsive\" src=\"https://upload.wikimedia.org/wikipedia/commons/thumb/2/2f/Google_2015_logo.svg/1000px-Google_2015_logo.svg.png\"> suggest how to optmize tag title</h4><ul><li><strong>Make sure every page on your site has a title specified in the <code>&lt;title&gt;</code> tag</strong>. If you’ve got a large site and are concerned you may have forgotten a title somewhere, the <a href=\"https://support.google.com/webmasters/answer/answer.py?answer=80407\">HTML suggestions</a> page in Search Console lists missing or potentially problematic <code>&lt;title&gt;</code> tags on your site.</li><br><li>Page titles should be <strong>descriptive and concise</strong>. Avoid vague descriptors like <code>\"Home\"</code> for your home page, or <code>\"Profile\"</code> for a specific person's profile. Also avoid unnecessarily long or verbose titles, which are likely to get truncated when they show up in the search results.</li><br><li>Avoid <strong>keyword stuffing</strong>. It's sometimes helpful to have a few descriptive terms in the title, but there’s no reason to have the same words or phrases appear multiple times. A title like <code>\"Foobar, foo bar, foobars, foo bars\"</code> doesn't help the user, and this kind of <a href=\"https://support.google.com/webmasters/answer/answer.py?answer=66358\">keyword stuffing</a> can make your results look spammy to Google and to users.</li><br><li>Avoid <strong>repeated or boilerplate titles</strong>. It’s important to have distinct, descriptive titles for each page on your site. Titling every page on a commerce site \"Cheap products for sale\", for example, makes it impossible for users to distinguish one page differs another. Long titles that vary by only a single piece of information (\"boilerplate\" titles) are also bad; for example, a standardized title like <code>\"&lt;band name&gt; - See videos, lyrics, posters, albums, reviews and concerts\"</code> contains a lot of uninformative text. One solution is to dynamically update the title to better reflect the actual content of the page: for example, include the words \"video\", \"lyrics\", etc., only if that particular page contains video or lyrics. Another option is to just use <code>\"&lt;band name&gt;\"</code> as a concise title and use the meta description (see below) to describe your site's content. The <a href=\"https://support.google.com/webmasters/answer/answer.py?answer=80407\">HTML suggestions</a> page in Search Console lists any duplicate titles Google detected on your pages.</li><br><li><strong>Brand your titles</strong>, but concisely. The title of your site’s home page is a reasonable place to include some additional information about your site—for instance, <code>\"ExampleSocialSite, a place for people to meet and mingle.\"</code> But displaying that text in the title of every single page on your site hurts readability and will look particularly repetitive if several pages from your site are returned for the same query. In this case, consider including just your site name at the beginning or end of each page title, separated from the rest of the title with a delimiter such as a hyphen, colon, or pipe, like this:<pre>&lt;title&gt;ExampleSocialSite: Sign up for a new account.&lt;/title&gt;</pre></li><br><li><strong>Be careful about disallowing search engines</strong> from crawling your pages. Using the <a href=\"http://code.google.com/web/controlcrawlindex/\" target=\"_blank\">robots.txt</a> protocol on your site can stop Google from crawling your pages, but it may not always prevent them from being indexed. For example, Google may index your page if we discover it by following a link from someone else's site. To display it in search results, Google will need to display a title of some kind and because we won't have access to any of your page content, we will rely on off-page content such as anchor text from other sites. (To truly block a URL from being indexed, you can use <a href=\"https://support.google.com/webmasters/answer/answer.py?answer=93710\">meta tags</a>.)</li></ul>";
    $lang['sugg_description']='';
    $lang['sugg_description_google']="<h4><img class=\"text-img img-xs img-responsive\" src=\"https://upload.wikimedia.org/wikipedia/commons/thumb/2/2f/Google_2015_logo.svg/1000px-Google_2015_logo.svg.png\"> Create good meta descriptions</h4><ul>
  <li>Make sure that <strong>every page on your site has a meta description</strong>. The <a href=\"https://support.google.com/webmasters/answer/answer.py?answer=80407\">HTML suggestions</a> page in Search Console lists pages where Google has detected missing or problematic meta descriptions.</li>
  <br>
  <li><strong>Differentiate the descriptions for different pages.</strong> Identical or similar descriptions on every page of a site aren't helpful when individual pages appear in the web results. In these cases we're less likely to display the boilerplate text. Wherever possible, create descriptions that accurately describe the specific page. Use site-level descriptions on the main home page or other aggregation pages, and use page-level descriptions everywhere else. If you don't have time to create a description for every single page, try to prioritize your content: At the very least, create a description for the critical URLs like your home page and popular pages.</li>
  <br>
  <li><strong>Include clearly tagged facts in the description.</strong> The meta description doesn't just have to be in sentence format; it's also a great place to include structured data about the page. For example, news or blog postings can list the author, date of publication, or byline information. This can give potential visitors very relevant information that might not be displayed in the snippet otherwise. Similarly, product pages might have the key bits of information—price, age, manufacturer—scattered throughout a page. A good meta description can bring all this data together. For example, the following meta description provides detailed information about a book.
    <pre>&lt;meta name=\"Description\" content=\"Author: A.N. Author,
Illustrator: P. Picture, Category: Books, Price: $17.99,
Length: 784 pages\"&gt;</pre>

    <p>In this example, information is clearly tagged and separated.</p>
  </li>
  <br>
  <li><strong>Programmatically generate descriptions.</strong> For some sites, like news media sources, generating an accurate and unique description for each page is easy: since each article is hand-written, it takes minimal effort to also add a one-sentence description. For larger database-driven sites, like product aggregators, hand-written descriptions can be impossible. In the latter case, however, programmatic generation of the descriptions can be appropriate and are encouraged. Good descriptions are human-readable and diverse, as we talked about in the first point above. The page-specific data we mentioned in the second point is a good candidate for programmatic generation. Keep in mind that meta descriptions comprised of long strings of keywords don't give users a clear idea of the page's content, and are less likely to be displayed in place of a regular snippet.</li>
  <br>
  <li><strong>Use quality descriptions.</strong> Finally, make sure your descriptions are truly descriptive. Because the meta descriptions aren't displayed in the pages the user sees, it's easy to let this content slide. But high-quality descriptions can be displayed in Google's search results, and can go a long way to improving the quality and quantity of your search traffic.</li>
</ul>";
    $lang['sugg_images_attr_title']="The title attribute can be used to describe almost any HTML element. A beneficial way to use the title attribute for SEO purposes would be to use it in the link element to provide descriptive text within an anchor tag (which gives you more real estate for your targeted keyword phrases). I would suggest not to duplicate your anchor text (for usability purposes). It's supposed to provide supplementary information and let the users know where the link will direct them to if they click on it. When creating your link titles, optimize for keyword phrases you’re targeting on the linked to page (just as you would with anchor text). Search engines only use them in consideration to the page being linked to, not the page the link is on";
    $lang['sugg_h1']="";
    $lang['sugg_h2']="";
    $lang['sugg_images']="";
    $lang['sugg_url_seo_friendly']='In the SEO environment it is recommended to always use the hyphen "-" and not the underscore "_" to separate the different keywords in the URL. In addition it is advisable to have a structure that contains all the letters from A to Z, all of the digits 0 to 9 and only and exclusively the following symbols: .(points) -(hyphen) and /(slash).';

/* SEO AUDIT - GENERALS */
    $lang['audit_analysis_title']="Analisi";
    $lang['audit_try_again']="Sei pronto? Riprova questo test";
    $lang['audit_final_valutation']="Valutazione Finale";
    $lang['audit_social_og']="Open Graph";
    $lang['audit_social_twittercard']="Twitter Card";
    $lang["audit_social_socialplugin"]="Social Plugin";
    $lang['audit_social_fbrank']='Popolarità su facebook';

/* SEO AUDIT - SPEED ZONE */
    $lang['audit_speed_alertcache']='*I risultati vengono memorizzati nella cache di google per 30 s. Se hai apportato modifiche alla tua pagina, aspetta 30 s prima di eseguire di nuovo il test.';

/* SEO AUDIT - BASE ZONE */
    $lang['audit_structure_menu_serp_preview']="Anteprima ricerca";
    $lang['audit_structure_menu_description']="Descrizione";
    $lang["audit_structure_menu_title"]="Titolo";
    $lang["audit_structure_menu_h1"]="H1";
    $lang["audit_structure_menu_h2"]="H2";
    $lang["audit_structure_menu_Keywords_url"]="Keywords url";
    $lang["audit_structure_menu_url_seo_frly"]="Url seo friendly";
    $lang["audit_structure_menu_meta_robots"]="Meta Robots";
    $lang["audit_structure_menu_robots"]="Robots.txt";
    $lang["audit_structure_menu_sitemap"]="Sitemap";

/* SEO AUDIT - CONTENTS*/

/* SEO AUDIT - CONTENTS -MENU */
    $lang["audit_base_menu_keywords"]="Keywords";
    $lang["audit_base_menu_keyword_density"]="Keywords Density";
    $lang["audit_base_menu_microdata"]="Microdata";
    $lang["audit_base_menu_title_coherence"]="Title Coherence";
    $lang["audit_base_menu_h1_coherence"]="H1 Coherence";
    $lang["audit_base_menu_txtcoderatio"]="Text/Code Ratio";
    $lang["audit_base_menu_page_size"]="Dimensioni pagina";
    $lang["audit_base_menu_img_alt"]="Alt sulle immagini";
    $lang["audit_base_menu_title_on_a"]="Title sul tag a";


    $lang["audit_base_exam_txtcoderatio"]='Il <b>text/code</b> ratio della pagina analizzata è di <b>{{$1}}%</b>';
    $lang["audit_base_page_size_score_low"]='La pagina analizzata risulta troppo pesante';

    $lang["audit_base_exam_txt_size"]='Dimensione testo';

    $lang["audit_base_exam_code_score_low"]='C\'è poco testo nella tua pagina! Lavora di più sul contentuto';
    $lang["audit_base_exam_code_score_med"]='Il rapporto tra testo e codice html della tua pagina sembra buono';
    $lang["audit_base_exam_code_score_high"]="Il rapporto tra testo e codice html della pagina sembra ottimo";

    $lang["audit_base_exam_code_size"]='Dimensione codice';
    $lang["audit_base_exam_page_size"]='Le dimensioni della pagina analizzata sono di <b>{{$1}} KB</b>';
    $lang["audit_base_page_size_score_high"]='Le dimensioni della pagina sono ottime';
    $lang["audit_base_page_size_score_med"]='Le dimensioni della pagina sembrano buone';

?>
