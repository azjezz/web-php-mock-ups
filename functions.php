<?php declare(strict_types=1);

namespace PHP\Layout {
  use function file_get_contents;
  use function str_replace;
  use function htmlspecialchars;

  function header(string $title = 'PHP'): string {
    $header = file_get_contents(__DIR__ . '/layout/header.layout.html');
    return str_replace('{{ title }}', $title, $header);
  }

  function source(string $source): string {
    $source = htmlspecialchars($source);
    $code = file_get_contents(__DIR__ . '/layout/code.layout.html');
    return str_replace('{{ source }}', $source, $code);
  }

  function footer(): string {
    return file_get_contents(__DIR__ . '/layout/footer.layout.html');
  }
}

namespace PHP\Http\Response {
  use function str_replace;
  use function header;
  use function sprintf;
  use function implode;
  use function ucwords;
  use function json_encode;

  function html(string ...$content): void {
    $headers = [
      'Content-Type' => [
        'text/html; charset=utf-8'
      ]
    ];
    emit(200, 'Ok', implode('', $content), $headers);
  }

  function json(/* mixed */ $content): void {
    $content = json_encode($content);
    $headers = [
      'Content-Type' => [
        'application/json'
      ]
    ];
    emit(200, 'Ok', $content, $headers);  
  }

  function redirect(string $url, bool $permanently = false): void {
    $headers = [
      'Location' => [$url]
    ];
    if ($permanently) {
      emit(301, 'Moved Permanently', null, $headers);
    } else {
      emit(302, 'Found', null, $headers);
    }
  }

  function emit(int $code, string $reason, ?string $body, array $headers = []): void {
    header(sprintf('HTTP/1.1 %d %s', $code, $reason), true, $code);
    foreach ($headers as $header => $values) {
      $name = str_replace(' ', '-', ucwords(str_replace('-', ' ', $header)));
      $first = $name === 'Set-Cookie' ? false : true;
      foreach ($values as $value) {
        header(sprintf('%s: %s', $name, $value), $first, $code);
        $first = false;
      }
    }
    if (null !== $body) {
      echo $body;
    }
    exit(0);
  }
}
