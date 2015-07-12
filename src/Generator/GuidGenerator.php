<?php
/**
 */

namespace Dspacelabs\Common\Generator;

/**
 * GUID Generator
 *
 * Generates random string in a GUID format structure
 *
 * Usage:
 *
 * ```php
 * $generator = new GuidGenerator();
 * $guid = $generator->generate();
 * ```
 */
class GuidGenerator
{
    /**
     * Generates a GUID string
     *
     * @return string
     */
    public function generate()
    {
        return sprintf(
            '%s-%s-%s-%s-%s',
            bin2hex(openssl_random_pseudo_bytes(4)),
            bin2hex(openssl_random_pseudo_bytes(2)),
            bin2hex(openssl_random_pseudo_bytes(2)),
            bin2hex(openssl_random_pseudo_bytes(2)),
            bin2hex(openssl_random_pseudo_bytes(6))
        );
    }
}
