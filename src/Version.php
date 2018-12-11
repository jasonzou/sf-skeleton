<?php declare(strict_types=1);

namespace Atom3;

/**
 * Atom3's current version.
 *
 * @author Carson Full <carsonfull@gmail.com>
 */
final class Version
{
    /**
     * Atom3's version constant.
     *
     * This should take the form of:
     *   x.y.z [[alpha|beta|RC|patch] n]
     *
     * e.g. versions for:
     *   Stable      — 1.0.0
     *   Development — 1.1.0 alpha 1
     */
    public const VERSION = '0.0.1 alpha 0';

    /**
     * Whether this release is a stable one.
     */
    public static function isStable(): bool
    {
        return (bool) preg_match('/^[0-9\.]+$/', static::VERSION);
    }

    /**
     * Compares a semantic version (x.y.z) against Atom3's version, given a
     * specified comparison operator.
     *
     * Note 1:
     * Be sure to include the `.z` number in the version given, as
     * omitting it can give inconsistent results.
     *
     * e.g. If the version of Atom3 was '3.2.0' (or greater), then:
     *     `Version::compare('3.2', '>=');`
     * is NOT equal to, or greater than, Atom3's version.
     *
     * Note 2:
     * Pre-release versions, such as 3.2.0-beta1, are considered lower
     * than their final release counterparts (like 2.3.0). As you may notice,
     * the difference being that Atom3 '3.2.0-beta1' is considered LOWER than
     * the `compare($version)` value of '3.2.0'.
     *
     * e.g. If the version of Atom3 was '3.2.0 beta 1', then:
     *     `Version::compare('3.2.0', '>=');`
     * is equal to, or greater than, Atom3's version.
     *
     * @see http://semver.org/ For an explanation on semantic versioning.
     * @see http://php.net/manual/en/function.version-compare.php#refsect1-function.version-compare-notes Notes on version_compare
     *
     * @param string $version  the version to compare
     * @param string $operator The comparison operator: <, <=, >, >=, ==, !=
     *
     * @return bool whether the comparison succeeded
     */
    public static function compare($version, $operator): bool
    {
        $currentVersion = str_replace(' ', '', mb_strtolower(static::VERSION));
        $version = str_replace(' ', '', mb_strtolower($version));

        return version_compare($version, $currentVersion, $operator);
    }

    /**
     * Returns a version formatted for composer.
     */
    public static function forComposer(): string
    {
        if (mb_strpos(static::VERSION, ' ') === false) {
            return static::VERSION;
        }

        $version = explode(' ', static::VERSION, 2);

        return $version[0];
    }

    /**
     * Must not be instantiated.
     */
    private function __construct()
    {
    }
}