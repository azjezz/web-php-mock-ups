<?php declare(strict_types=1);

require '../../../../functions.php';

$content = <<<HTML
<div class="hero bg-gray">
    <div class="hero-body">
        <div class="container  grid-lg">
            <h2><span class='text-bold'>Getting Started </span> </h2>
            <hr /><br /><br />
            <div class="columns">
                <div class="column col-4">
                    <div class="accordion">
                        <input id="accordion-1" type="checkbox" name="accordion-checkbox" checked="" hidden="">
                        <label class="accordion-header c-hand" for="accordion-1">Getting Started</label>
                        <div class="accordion-body">
                            <ul class="menu menu-nav">
                                <li class="menu-item"><a href="/getting-started/introduction/what-is-php">What is PHP ?</a></li>
                                <li class="menu-item"><a href="/getting-started/introduction/what-can-php-do">What can PHP do ?</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="accordion">
                        <input id="accordion-2" type="checkbox" name="accordion-checkbox" checked="" hidden="">
                        <label class="accordion-header c-hand" for="accordion-2">Installation</label>
                        <div class="accordion-body">
                            <ul class="menu menu-nav">
                                <li class="menu-item"><a href="#accordions">Linux</a></li>
                                <li class="menu-item"><a href="#accordions">Windows</a></li>
                                <li class="menu-item"><a href="#accordions">Mac OS</a></li>
                                <li class="menu-item"><a href="#accordions">Other Platforms</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="accordion">                    
                        <input id="accordion-3" type="checkbox" name="accordion-checkbox" checked="" hidden="">
                        <label class="accordion-header c-hand" for="accordion-3">A simple tutorial</label>
                        <div class="accordion-body">
                            <ul class="menu menu-nav">
                                <li class="menu-item"><a href="#accordions">What do i need ?</a></li>
                                <li class="menu-item"><a href="#accordions">Your first PHP-enabled page</a></li>
                                <li class="menu-item"><a href="#accordions">Something Useful</a></li>
                                <li class="menu-item"><a href="#accordions">Dealing with Forms</a></li>
                                <li class="menu-item"><a href="#accordions">Using old code with new versions of PHP</a></li>
                                <li class="menu-item"><a href="#accordions">What's next?</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="column col-8">
                    <h3><span class='text-bold'>What can PHP do ?</span></h3>            
                    <p>
                        Anything. PHP is mainly focused on server-side scripting, so you can do anything any other CGI program can do, such as collect form data, generate dynamic page content, or send and receive cookies. But PHP can do much more. <br /><br />
                        There are three main areas where PHP scripts are used. <br />
                        <ul>
                            <li>Server-side scripting. This is the most traditional and main target field for PHP. You need three things to make this work: the PHP parser (CGI or server module), a web server and a web browser. You need to run the web server, with a connected PHP installation. You can access the PHP program output with a web browser, viewing the PHP page through the server. All these can run on your home machine if you are just experimenting with PHP programming. See the <a href="/getting-started/installation">installation instructions</a> section for more information.</li>
                            <li>Command line scripting. You can make a PHP script to run it without any server or browser. You only need the PHP parser to use it this way. This type of usage is ideal for scripts regularly executed using cron (on *nix or Linux) or Task Scheduler (on Windows). These scripts can also be used for simple text processing tasks. See the section about <a href="/getting-started/cli">Command line usage of PHP</a> for more information.</li>
                            <li>Writing desktop applications. PHP is probably not the very best language to create a desktop application with a graphical user interface, but if you know PHP very well, and would like to use some advanced PHP features in your client-side applications you can also use PHP to write such programs. You also have the ability to write cross-platform applications this way.  See the section about <a href="/getting-started/gui">GUI PHP</a> for more information.</li>
                        </ul>
                        PHP can be <a href="/getting-started/installation">used</a> on all major operating systems, including Linux, many Unix variants (including HP-UX, Solaris and OpenBSD), Microsoft Windows, macOS, RISC OS, and probably others. PHP also has support for most of the web servers today. This includes Apache, IIS, and many others. And this includes any web server that can utilize the FastCGI PHP binary, like lighttpd and nginx. PHP works as either a module, or as a CGI processor.<br />
                        So with PHP, you have the freedom of choosing an operating system and a web server. Furthermore, you also have the choice of using procedural programming or object oriented programming (OOP), or a mixture of them both. <br/> <br/>
                        With PHP you are not limited to output HTML. PHP's abilities includes outputting images, PDF files and even Flash movies (using libswf and Ming) generated on the fly. You can also output easily any text, such as XHTML and any other XML file. PHP can autogenerate these files, and save them in the file system, instead of printing it out, forming a server-side cache for your dynamic content.<br /> <br />
                        One of the strongest and most significant features in PHP is its support for a wide range of databases. Writing a database-enabled web page is incredibly simple using one of the database specific extensions (e.g., for mysqli), or using an abstraction layer like PDO, or connect to any database supporting the Open Database Connection standard via the ODBC extension. Other databases may utilize cURL or sockets, like CouchDB.<br /> <br />
                        PHP also has support for talking to other services using protocols such as LDAP, IMAP, SNMP, NNTP, POP3, HTTP, COM (on Windows) and countless others. You can also open raw network sockets and interact using any other protocol. PHP has support for the WDDX complex data exchange between virtually all Web programming languages. Talking about interconnection, PHP has support for instantiation of Java objects and using them transparently as PHP objects. 
                        PHP has useful text processing features, which includes the Perl compatible regular expressions (PCRE), and many extensions and tools to parse and access XML documents. PHP standardizes all of the XML extensions on the solid base of libxml2, and extends the feature set adding SimpleXML, XMLReader and XMLWriter support. <br /><br />
                        And many other interesting extensions exist, which are categorized both alphabetically and by category. And there are additional PECL extensions that may or may not be documented within the PHP documentation itself, like XDebug. <br /> <br />
                        As you can see this page is not enough to list all the features and benefits PHP can offer. Read on in the sections about installing PHP, and see the function reference part for explanation of the extensions mentioned here.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
HTML;

PHP\Http\Response\html(
    PHP\Layout\header('Getting Started'),
    $content,
    PHP\Layout\footer()
);
