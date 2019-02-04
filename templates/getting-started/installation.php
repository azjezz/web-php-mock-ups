<?= $this->layout('getting-started/layout', [
    'title' => 'Getting Start - Installation',
    'section' => 'Installation'
]) ?>

<h3><span class='text-bold'>General Installation Considerations</span></h3>
<p>
Before starting the installation, first you need to know what do you want to use PHP for. There are three main fields you can use PHP, as described in the <a href="/getting-started/introduction/what-can-php-do">What can PHP do?</a> section: <br />

<ul>
    <li>Websites and web applications (server-side scripting)</li>
    <li>Command line scripting</li>
    <li>Desktop (GUI) applications</li>
</ul>

For the first and most common form, you need three things: PHP itself, a web server and a web browser.<br />
You probably already have a web browser, and depending on your operating system setup, you may also have a web server (e.g. Apache on Linux and macOS; IIS on Windows).<br />
You may also rent webspace at a company.<br />
This way, you don't need to set up anything on your own, only write your PHP scripts, upload it to the server you rent, and see the results in your browser.<br /><br />

In case of setting up the server and PHP on your own, you have two choices for the method of connecting PHP to the server.<br />
For many servers PHP has a direct module interface (also called SAPI).<br />
These servers include Apache, Microsoft Internet Information Server, Netscape and iPlanet servers. Many other servers have support for ISAPI, the Microsoft module interface (OmniHTTPd for example).<br />
If PHP has no module support for your web server, you can always use it as a CGI or FastCGI processor.<br />
This means you set up your server to use the CGI executable of PHP to process all PHP file requests on the server.<br /><br />

If you are also interested in using PHP for command line scripting (e.g. write scripts autogenerating some images for you offline, or processing text files depending on some arguments you pass to them), you always need the command line executable.<br />
For more information, read the section about writing command line PHP applications.<br />
In this case, you need no server and no browser.<br /><br />

With PHP you can also write desktop GUI applications using the <a href="/extension/php-gtk">PHP-GTK extension</a> or the <a href="https://github.com/gabrielrcouto/php-gui">PHP-GUI</a> library.<br />
This is a completely different approach than writing web pages, as you do not output any HTML, but manage windows and objects within them.<br />
For more information about PHP-GTK and PHP-GUI, please visit the GUI section <a href="/docs/gui">here</a>.
PHP-GTK and PHP-GUI are not included in the official PHP distribution.<br /><br />

From now on, this section deals with setting up PHP for web servers on Unix and Windows with server module interfaces and CGI executables.<br />
You will also find information on the command line executable in the following sections.<br /><br />
</p>
