<?= $this->layout('getting-started/layout', [
    'title' => 'Getting Start - Installation',
    'section' => 'Installation'
]) ?>

<h3><span class='text-bold'>Windows Installation</span></h3>

<!-- All-in-One Packages -->
<h4 class="text-bold text-primary" id="all-in-one-packages">All-in-One Packages</h4>
<p>
    There are some excellent all-in-one Windows distributions that contain Apache, PHP, MySQL and other applications in a single installation file, e.g. <a href="http://www.apachefriends.org/en/xampp.html" target="__blank">XAMPP</a> (including a Mac version), <a href="http://www.wampserver.com/en/" target="__blank">WampServer</a> and <a href="http://www.devside.net/server/webdeveloper" target="__blank">Web.Developer</a>. There is nothing wrong with using these packages, although manually installing Apache and PHP will help you learn more about the system and its configuration options.<br />
</p>

<!-- Using Package Manager -->
<h4 class="text-bold text-primary" id="all-in-one-packages">Using Package Manager</h4>
<p>
    You can alternatively download PHP using <a href="https://scoop.sh" target="__blank">scoop</a> or <a href="https://chocolatey.org" target="__blank">chocolatey</a> package managers.
</p>

<h5 class="text-bold" id="chocolatey" >Scoop</h5>
<p>
To install PHP using Scoop package manager, run the following command from the command line or from PowerShell :
<pre class="code console"><code class="bg-dark text-light">C:\> scoop install php</code></pre>
Or you can download the thread safe version of php using :
<pre class="code console"><code class="bg-dark text-light">C:\> scoop install php-ts</code></pre>
</p>
<h5 class="text-bold" id="chocolatey" >Chocolatey</h5>
<p>
Package Parameters :
<ul>
    <li><code>/DontAddToPath</code> - Do not add install directory to path</li>
    <li><code>/InstallDir</code> - Override the installation directory (needs to be specified both during install and update, until it is remembered by choco)</li>
    <li><code>/ThreadSafe</code> - Install the thread safe version of php that is compatible with Apache.</li>
</ul>
    These parameters can be passed to the installer with the use of <code>--params</code>.<br />
    For example: <code>--params '"/ThreadSafe ""/InstallDir:C:\PHP"""'</code>.<br /><br />
    To install PHP, run the following command from the command line or from PowerShell :
<pre class="code console"><code class="bg-dark text-light">C:\> choco install php</code></pre>
more information can be found in the chocolatey <a href="https://chocolatey.org/packages/php" target="__blank">php package</a> page.
</p>

<!-- Manul -->
<h4 class="text-bold text-primary" id="manual">Manual Installation</h4>
<p>
    Manual installation offers several benefits:
    <ul>
        <li>backing up, reinstalling, or moving the web server can be achieved in seconds.</li>
        <li>you have more control over PHP configuration.</li>
    </ul>
</p>

<h5 class="text-bold" id="setp-1">Step 1: Download the files</h5>
<p>
Download the latest PHP ZIP package from the <a href="/downloads" target="__blank">download</a> page.<br />

As always, virus scan the file and check its MD5 checksum using a tool such as <a href="http://www.slavasoft.com/fsum/" target="__blank">fsum</a>.<br />
</p>

<h5 class="text-bold" id="setp-2">Step 2: Extract the files</h5>
<p>
We will install the PHP files to <code>C:\php</code>, so create that folder and extract the contents of the ZIP file into it.<br />
PHP can be installed anywhere on your system, but you will need to change the paths referenced in the following steps.<br />
</p>

<h5 class="text-bold" id="setp-3">Step 3: Configure php.ini</h5>
<p>
Copy <code>C:\php\php.ini-development</code> to <code>C:\php\php.ini</code>.<br />
There are several lines you will need to change in a text editor (use search to find the current setting).<br />
Where applicable, you will need to remove the leading semicolon to uncomment these setting.<br />

<br />

Define the extension directory:

<pre class="code ini"><code class="bg-dark text-light">extension_dir = "C:/php/ext"</code></pre>

Enable extensions. This will depend on the libraries you want to use, but the following extensions should be suitable for the majority of applications:

<pre class="code ini"><code class="bg-dark text-light">extension=curl
extension=gd2
extension=mbstring
extension=mysql
extension=pdo_mysql
extension=xmlrpc</code></pre>

If you want to send emails using the PHP mail() function, enter the details of an SMTP server (your ISP’s server should be suitable):

<pre class="code ini"><code class="bg-dark text-light">[mail function]
; For Win32 only.
SMTP = mail.myisp.com
smtp_port = 25

; For Win32 only.
sendmail_from = my@emailaddress.com</code></pre>

</p>
<h5 class="text-bold" id="setp-4">Step 4: Add C:\php to the path environment</h5>
<p>
To ensure Windows can find PHP, you need to change the path environment variable.<br />
Open Settings, type ‘environment variables’ into the search field and open the result.<br />
Select the “Advanced” tab, and click the “Environment Variables” button.<br />
<br />
Scroll down the System variables list and click on “Path” followed by the “Edit” button.<br />
Click “Edit text” and add ;C:\php to the end of the Variable value line (remember the semicolon).<br />
<br />
Now click OK until you’re out. You might need to reboot at this stage.<br />
</p>