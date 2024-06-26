<?php

namespace Drupal\salesforce\Tests;

use Drupal\Component\Utility\NestedArray;
use Drupal\Core\Http\ClientFactory;
use Drupal\Core\Site\Settings;
use GuzzleHttp\Utils;

/**
 * Helper class to construct a HTTP client with Drupal specific config.
 */
class TestHttpClientFactory extends ClientFactory {

  /**
   * Constructs a new client object from some configuration.
   *
   * @param array $config
   *   The config for the client.
   *
   * @return \GuzzleHttp\Client
   *   The HTTP client.
   */
  public function fromOptions(array $config = []) {
    $default_config = [
      // Security consideration: we must not use the certificate authority
      // file shipped with Guzzle because it can easily get outdated if a
      // certificate authority is hacked. Instead, we rely on the certificate
      // authority file provided by the operating system which is more likely
      // going to be updated in a timely fashion. This overrides the default
      // path to the pem file bundled with Guzzle.
      'verify' => TRUE,
      'timeout' => 30,
      'headers' => [
        'User-Agent' => 'Drupal/' . \Drupal::VERSION . ' (+https://www.drupal.org/) ' . Utils::defaultUserAgent(),
      ],
      'handler' => $this->stack,
      // Security consideration: prevent Guzzle from using environment variables
      // to configure the outbound proxy.
      'proxy' => [
        'http' => NULL,
        'https' => NULL,
        'no' => [],
      ],
    ];

    $config = NestedArray::mergeDeep($default_config, Settings::get('http_client_config', []), $config);

    return new TestHttpClient($config);
  }

}
