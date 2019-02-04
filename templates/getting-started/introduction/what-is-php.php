<?= $this->layout('getting-started/layout', [
    'title' => 'Getting Start - Interoduction',
    'section' => 'Introduction'
]) ?>

<h3>
    <span class='text-bold'>What's PHP ?</span>
</h3>
<p>
PHP (recursive acronym for PHP: Hypertext Preprocessor) is a widely-used open source general-purpose scripting language that is especially suited for web development and can be embedded into HTML. <br />
Nice, but what does that mean? An example: <br />
<pre class="code php">
<code class="bg-dark text-light">
<?= $this->e("<!DOCTYPE html>
<html>
    <head>
        <title>Hello, World</title>
    </head>

    <body>
        <?php
            echo 'Hi, I\'m a PHP script!';
        ?>
    </body>
</html>"); ?>
</code>
</pre>
Instead of lots of commands to output HTML (as seen in C or Perl), PHP pages contain HTML with embedded code that does "something" (in this case, output "Hi, I'm a PHP script!"). The PHP code is enclosed in special start and end processing instructions <code>&lt;?php</code> and <code>?&gt;</code> that allow you to jump into and out of "PHP mode."<br /><br />
What distinguishes PHP from something like client-side JavaScript is that the code is executed on the server, generating HTML which is then sent to the client. The client would receive the results of running that script, but would not know what the underlying code was. You can even configure your web server to process all your HTML files with PHP, and then there's really no way that users can tell what you have up your sleeve. <br /><br />
The best things in using PHP are that it is extremely simple for a newcomer, but offers many advanced features for a professional programmer. Don't be afraid reading the long list of PHP's features. You can jump in, in a short time, and start writing simple scripts in a few hours. <br /><br />
Although PHP's development is focused on server-side scripting, you can do much more with it. Read on, and see more in the What can PHP do? section, or go right to the introductory tutorial if you are only interested in web programming. <br /><br />
</p>
