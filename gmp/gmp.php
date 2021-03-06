<?php

// Start of gmp v.

/**
 * Create GMP number
 * @link http://php.net/manual/zh/function.gmp-init.php
 * @param mixed $number <p>
 * An integer or a string. The string representation can be decimal,
 * hexadecimal or octal.
 * </p>
 * @param int $base [optional] <p>
 * The base.
 * </p>
 * <p>
 * The base may vary from 2 to 36. If base is 0 (default value), the
 * actual base is determined from the leading characters: if the first
 * two characters are 0x or 0X,
 * hexadecimal is assumed, otherwise if the first character is "0",
 * octal is assumed, otherwise decimal is assumed.
 * </p>
 * @return resource A GMP number resource.
 * @since 4.0.4
 * @since 5.0
 */
function gmp_init ($number, $base = 0) {}

/**
 * Convert GMP number to integer
 * @link http://php.net/manual/zh/function.gmp-intval.php
 * @param resource $gmpnumber <p>
 * A GMP number.
 * </p>
 * @return int An integer value of <i>gmpnumber</i>.
 * @since 4.0.4
 * @since 5.0
 */
function gmp_intval ($gmpnumber) {}

/**
 * Sets the RNG seed
 * @param mixed $seed <p>
 * The seed to be set for the {@see gmp_random()}, {@see gmp_random_bits()}, and {@see gmp_random_range()} functions.
 * </p>
 * Either a GMP number resource in PHP 5.5 and earlier, a GMP object in PHP 5.6 and later, or a numeric string provided that it is possible to convert the latter to a number.
 * @return mixed Returns NULL on success.
 * @since 7.0
 */
function gmp_random_seed ($seed ) {}
/**
 * Convert GMP number to string
 * @link http://php.net/manual/zh/function.gmp-strval.php
 * @param resource|string $gmpnumber <p>
 * The GMP number that will be converted to a string.
 * </p>
 * It can be either a GMP number resource, or a
 * numeric string given that it is possible to convert the latter to a number.</p>
 * @param int $base [optional] <p>
 * The base of the returned number. The default base is 10.
 * Allowed values for the base are from 2 to 62 and -2 to -36.
 * </p>
 * @return string The number, as a string.
 * @since 4.0.4
 * @since 5.0
 */
function gmp_strval ($gmpnumber, $base = 10) {}

/**
 * Add numbers
 * @link http://php.net/manual/zh/function.gmp-add.php
 * @param resource|string $a <p>
 * A number that will be added.
 * </p>
 * It can be either a GMP number resource, or a
 * numeric string given that it is possible to convert the latter to a number.</p>
 * @param resource|string $b <p>
 * A number that will be added.
 * </p>
 * It can be either a GMP number resource, or a
 * numeric string given that it is possible to convert the latter to a number.</p>
 * @return resource A GMP number representing the sum of the arguments.
 * @since 4.0.4
 * @since 5.0
 */
function gmp_add ($a, $b) {}

/**
 * Subtract numbers
 * @link http://php.net/manual/zh/function.gmp-sub.php
 * @param resource|string $a <p>
 * The number being subtracted from.
 * </p>
 * It can be either a GMP number resource, or a
 * numeric string given that it is possible to convert the latter to a number.</p>
 * @param resource|string $b <p>
 * The number subtracted from <i>a</i>.
 * </p>
 * It can be either a GMP number resource, or a
 * numeric string given that it is possible to convert the latter to a number.</p>
 * @return GMP A GMP number resource.
 * @since 4.0.4
 * @since 5.0
 */
function gmp_sub ($a, $b) {}

/**
 * Multiply numbers
 * @link http://php.net/manual/zh/function.gmp-mul.php
 * @param resource|string $a <p>
 * A number that will be multiplied by <i>b</i>.
 * </p>
 * It can be either a GMP number resource, or a
 * numeric string given that it is possible to convert the latter to a number.</p>
 * @param resource|string $b <p>
 * A number that will be multiplied by <i>a</i>.
 * </p>
 * It can be either a GMP number resource, or a
 * numeric string given that it is possible to convert the latter to a number.</p>
 * @return resource A GMP number resource.
 * @since 4.0.4
 * @since 5.0
 */
function gmp_mul ($a, $b) {}

/**
 * Divide numbers and get quotient and remainder
 * @link http://php.net/manual/zh/function.gmp-div-qr.php
 * @param resource|string $n <p>
 * The number being divided.
 * </p>
 * It can be either a GMP number resource, or a
 * numeric string given that it is possible to convert the latter to a number.</p>
 * @param resource|string $d <p>
 * The number that <i>n</i> is being divided by.
 * </p>
 * It can be either a GMP number resource, or a
 * numeric string given that it is possible to convert the latter to a number.</p>
 * @param int $round [optional] <p>
 * See the <b>gmp_div_q</b> function for description
 * of the <i>round</i> argument.
 * </p>
 * @return array an array, with the first
 * element being [n/d] (the integer result of the
 * division) and the second being (n - [n/d] * d)
 * (the remainder of the division).
 * @since 4.0.4
 * @since 5.0
 */
function gmp_div_qr ($n, $d, $round = GMP_ROUND_ZERO) {}

/**
 * Divide numbers
 * @link http://php.net/manual/zh/function.gmp-div-q.php
 * @param resource|string $a <p>
 * The number being divided.
 * </p>
 * It can be either a GMP number resource, or a
 * numeric string given that it is possible to convert the latter to a number.</p>
 * @param resource|string $b <p>
 * The number that <i>a</i> is being divided by.
 * </p>
 * It can be either a GMP number resource, or a
 * numeric string given that it is possible to convert the latter to a number.</p>
 * @param int $round [optional] <p>
 * The result rounding is defined by the
 * <i>round</i>, which can have the following
 * values:
 * <b>GMP_ROUND_ZERO</b>: The result is truncated
 * towards 0.
 * @return resource A GMP number resource.
 * @since 4.0.4
 * @since 5.0
 */
function gmp_div_q ($a, $b, $round = GMP_ROUND_ZERO) {}

/**
 * Remainder of the division of numbers
 * @link http://php.net/manual/zh/function.gmp-div-r.php
 * @param resource|string $n <p>
 * The number being divided.
 * </p>
 * It can be either a GMP number resource, or a
 * numeric string given that it is possible to convert the latter to a number.</p>
 * @param resource|string $d <p>
 * The number that <i>n</i> is being divided by.
 * </p>
 * It can be either a GMP number resource, or a
 * numeric string given that it is possible to convert the latter to a number.</p>
 * @param int $round [optional] <p>
 * See the <b>gmp_div_q</b> function for description
 * of the <i>round</i> argument.
 * </p>
 * @return resource The remainder, as a GMP number.
 * @since 4.0.4
 * @since 5.0
 */
function gmp_div_r ($n, $d, $round = GMP_ROUND_ZERO) {}

/**
 * Divide numbers
 * @link http://php.net/manual/zh/function.gmp-div-q.php
 * @param resource|string|GMP $a <p>
 * The number being divided.
 * </p>
 * It can be either a GMP number resource, or a
 * numeric string given that it is possible to convert the latter to a number.</p>
 * @param resource|string|GMP $b <p>
 * The number that <i>a</i> is being divided by.
 * </p>
 * It can be either a GMP number resource, or a
 * numeric string given that it is possible to convert the latter to a number.</p>
 * @param int $round [optional] <p>
 * The result rounding is defined by the
 * <i>round</i>, which can have the following
 * values:
 * <b>GMP_ROUND_ZERO</b>: The result is truncated
 * towards 0.
 * @return resource A GMP number resource.
 * @since 4.0.4
 * @since 5.0
 */
function gmp_div ($a, $b, $round = GMP_ROUND_ZERO) {}

/**
 * Modulo operation
 * @link http://php.net/manual/zh/function.gmp-mod.php
 * @param resource|string $n It can be either a GMP number resource, or a
 * numeric string given that it is possible to convert the latter to a number.</p>
 * @param resource|string $d <p>
 * The modulo that is being evaluated.
 * </p>
 * It can be either a GMP number resource, or a
 * numeric string given that it is possible to convert the latter to a number.</p>
 * @return resource A GMP number resource.
 * @since 4.0.4
 * @since 5.0
 */
function gmp_mod ($n, $d) {}

/**
 * Exact division of numbers
 * @link http://php.net/manual/zh/function.gmp-divexact.php
 * @param resource|string|GMP $n <p>
 * The number being divided.
 * </p>
 * It can be either a GMP number resource, or a
 * numeric string given that it is possible to convert the latter to a number.</p>
 * @param resource|string|GMP $d <p>
 * The number that <i>a</i> is being divided by.
 * </p>
 * It can be either a GMP number resource, or a
 * numeric string given that it is possible to convert the latter to a number.</p>
 * @return resource A GMP number resource.
 * @since 4.0.4
 * @since 5.0
 */
function gmp_divexact ($n, $d) {}

/**
 * Negate number
 * @link http://php.net/manual/zh/function.gmp-neg.php
 * @param resource|string $a It can be either a GMP number resource, or a
 * numeric string given that it is possible to convert the latter to a number.</p>
 * @return resource -<i>a</i>, as a GMP number.
 * @since 4.0.4
 * @since 5.0
 */
function gmp_neg ($a) {}

/**
 * Absolute value
 * @link http://php.net/manual/zh/function.gmp-abs.php
 * @param resource|string $a It can be either a GMP number resource, or a
 * numeric string given that it is possible to convert the latter to a number.</p>
 * @return resource the absolute value of <i>a</i>, as a GMP number.
 * @since 4.0.4
 * @since 5.0
 */
function gmp_abs ($a) {}

/**
 * Factorial
 * @link http://php.net/manual/zh/function.gmp-fact.php
 * @param resource|string $a <p>
 * The factorial number.
 * </p>
 * It can be either a GMP number resource, or a
 * numeric string given that it is possible to convert the latter to a number.</p>
 * @return resource A GMP number resource.
 * @since 4.0.4
 * @since 5.0
 */
function gmp_fact ($a) {}

/**
 * Calculate square root
 * @link http://php.net/manual/zh/function.gmp-sqrt.php
 * @param resource|string $a It can be either a GMP number resource, or a
 * numeric string given that it is possible to convert the latter to a number.</p>
 * @return resource The integer portion of the square root, as a GMP number.
 * @since 4.0.4
 * @since 5.0
 */
function gmp_sqrt ($a) {}

/**
 * Square root with remainder
 * @link http://php.net/manual/zh/function.gmp-sqrtrem.php
 * @param resource|string $a <p>
 * The number being square rooted.
 * </p>
 * It can be either a GMP number resource, or a
 * numeric string given that it is possible to convert the latter to a number.</p>
 * @return array array where first element is the integer square root of
 * <i>a</i> and the second is the remainder
 * (i.e., the difference between <i>a</i> and the
 * first element squared).
 * @since 4.0.4
 * @since 5.0
 */
function gmp_sqrtrem ($a) {}

/**
 * Raise number into power
 * @link http://php.net/manual/zh/function.gmp-pow.php
 * @param resource|string $base <p>
 * The base number.
 * </p>
 * It can be either a GMP number resource, or a
 * numeric string given that it is possible to convert the latter to a number.</p>
 * @param int $exp <p>
 * The positive power to raise the <i>base</i>.
 * </p>
 * @return resource The new (raised) number, as a GMP number. The case of
 * 0^0 yields 1.
 * @since 4.0.4
 * @since 5.0
 */
function gmp_pow ($base, $exp) {}

/**
 * Raise number into power with modulo
 * @link http://php.net/manual/zh/function.gmp-powm.php
 * @param resource|string $base <p>
 * The base number.
 * </p>
 * It can be either a GMP number resource, or a
 * numeric string given that it is possible to convert the latter to a number.</p>
 * @param resource|string $exp <p>
 * The positive power to raise the <i>base</i>.
 * </p>
 * It can be either a GMP number resource, or a
 * numeric string given that it is possible to convert the latter to a number.</p>
 * @param resource|string $mod <p>
 * The modulo.
 * </p>
 * It can be either a GMP number resource, or a
 * numeric string given that it is possible to convert the latter to a number.</p>
 * @return resource The new (raised) number, as a GMP number.
 * @since 4.0.4
 * @since 5.0
 */
function gmp_powm ($base, $exp, $mod) {}

/**
 * Perfect square check
 * @link http://php.net/manual/zh/function.gmp-perfect-square.php
 * @param resource|string $a <p>
 * The number being checked as a perfect square.
 * </p>
 * It can be either a GMP number resource, or a
 * numeric string given that it is possible to convert the latter to a number.</p>
 * @return bool <b>TRUE</b> if <i>a</i> is a perfect square,
 * <b>FALSE</b> otherwise.
 * @since 4.0.4
 * @since 5.0
 */
function gmp_perfect_square ($a) {}

/**
 * Check if number is "probably prime"
 * @link http://php.net/manual/zh/function.gmp-prob-prime.php
 * @param resource|string $a <p>
 * The number being checked as a prime.
 * </p>
 * It can be either a GMP number resource, or a
 * numeric string given that it is possible to convert the latter to a number.</p>
 * @param int $reps [optional] <p>
 * Reasonable values
 * of <i>reps</i> vary from 5 to 10 (default being
 * 10); a higher value lowers the probability for a non-prime to
 * pass as a "probable" prime.
 * </p>
 * It can be either a GMP number resource, or a
 * numeric string given that it is possible to convert the latter to a number.</p>
 * @return int If this function returns 0, <i>a</i> is
 * definitely not prime. If it returns 1, then
 * <i>a</i> is "probably" prime. If it returns 2,
 * then <i>a</i> is surely prime.
 * @since 4.0.4
 * @since 5.0
 */
function gmp_prob_prime ($a, $reps = 10) {}

/**
 * Calculate GCD
 * @link http://php.net/manual/zh/function.gmp-gcd.php
 * @param resource|string $a It can be either a GMP number resource, or a
 * numeric string given that it is possible to convert the latter to a number.</p>
 * @param resource|string $b It can be either a GMP number resource, or a
 * numeric string given that it is possible to convert the latter to a number.</p>
 * @return resource A positive GMP number that divides into both
 * <i>a</i> and <i>b</i>.
 * @since 4.0.4
 * @since 5.0
 */
function gmp_gcd ($a, $b) {}

/**
 * Calculate GCD and multipliers
 * @link http://php.net/manual/zh/function.gmp-gcdext.php
 * @param resource|string $a It can be either a GMP number resource, or a
 * numeric string given that it is possible to convert the latter to a number.</p>
 * @param resource|string $b It can be either a GMP number resource, or a
 * numeric string given that it is possible to convert the latter to a number.</p>
 * @return array An array of GMP numbers.
 * @since 4.0.4
 * @since 5.0
 */
function gmp_gcdext ($a, $b) {}

/**
 * Inverse by modulo
 * @link http://php.net/manual/zh/function.gmp-invert.php
 * @param resource|string $a It can be either a GMP number resource, or a
 * numeric string given that it is possible to convert the latter to a number.</p>
 * @param resource|string $b It can be either a GMP number resource, or a
 * numeric string given that it is possible to convert the latter to a number.</p>
 * @return resource A GMP number on success or <b>FALSE</b> if an inverse does not exist.
 * @since 4.0.4
 * @since 5.0
 */
function gmp_invert ($a, $b) {}

/**
 * Jacobi symbol
 * @link http://php.net/manual/zh/function.gmp-jacobi.php
 * @param resource|string $a It can be either a GMP number resource, or a
 * numeric string given that it is possible to convert the latter to a number.</p>
 * @param resource|string $p It can be either a GMP number resource, or a
 * numeric string given that it is possible to convert the latter to a number.</p>
 * <p>
 * Should be odd and must be positive.
 * </p>
 * @return int A GMP number resource.
 * @since 4.0.4
 * @since 5.0
 */
function gmp_jacobi ($a, $p) {}

/**
 * Legendre symbol
 * @link http://php.net/manual/zh/function.gmp-legendre.php
 * @param resource|string $a It can be either a GMP number resource, or a
 * numeric string given that it is possible to convert the latter to a number.</p>
 * @param resource|string $p It can be either a GMP number resource, or a
 * numeric string given that it is possible to convert the latter to a number.</p>
 * <p>
 * Should be odd and must be positive.
 * </p>
 * @return int A GMP number resource.
 * @since 4.0.4
 * @since 5.0
 */
function gmp_legendre ($a, $p) {}

/**
 * Compare numbers
 * @link http://php.net/manual/zh/function.gmp-cmp.php
 * @param resource|string $a It can be either a GMP number resource, or a
 * numeric string given that it is possible to convert the latter to a number.</p>
 * @param resource|string $b It can be either a GMP number resource, or a
 * numeric string given that it is possible to convert the latter to a number.</p>
 * @return int a positive value if a &gt; b, zero if
 * a = b and a negative value if a &lt;
 * b.
 * @since 4.0.4
 * @since 5.0
 */
function gmp_cmp ($a, $b) {}

/**
 * Sign of number
 * @link http://php.net/manual/zh/function.gmp-sign.php
 * @param resource|string $a It can be either a GMP number resource, or a
 * numeric string given that it is possible to convert the latter to a number.</p>
 * @return int 1 if <i>a</i> is positive,
 * -1 if <i>a</i> is negative,
 * and 0 if <i>a</i> is zero.
 * @since 4.0.4
 * @since 5.0
 */
function gmp_sign ($a) {}

/**
 * Random number
 * @link http://php.net/manual/zh/function.gmp-random.php
 * @param int $limiter [optional] <p>
 * The limiter.
 * </p>
 * It can be either a GMP number resource, or a
 * numeric string given that it is possible to convert the latter to a number.</p>
 * @return resource A random GMP number.
 * @since 4.0.4
 * @since 5.0
 */
function gmp_random ($limiter = 20) {}

/**
 * Bitwise AND
 * @link http://php.net/manual/zh/function.gmp-and.php
 * @param resource|string $a It can be either a GMP number resource, or a
 * numeric string given that it is possible to convert the latter to a number.</p>
 * @param resource|string $b It can be either a GMP number resource, or a
 * numeric string given that it is possible to convert the latter to a number.</p>
 * @return resource A GMP number representing the bitwise AND comparison.
 * @since 4.0.4
 * @since 5.0
 */
function gmp_and ($a, $b) {}

/**
 * Bitwise OR
 * @link http://php.net/manual/zh/function.gmp-or.php
 * @param resource|string $a It can be either a GMP number resource, or a
 * numeric string given that it is possible to convert the latter to a number.</p>
 * @param resource|string $b It can be either a GMP number resource, or a
 * numeric string given that it is possible to convert the latter to a number.</p>
 * @return resource A GMP number resource.
 * @since 4.0.4
 * @since 5.0
 */
function gmp_or ($a, $b) {}

/**
 * Calculates one's complement
 * @link http://php.net/manual/zh/function.gmp-com.php
 * @param resource|string $a It can be either a GMP number resource, or a
 * numeric string given that it is possible to convert the latter to a number.</p>
 * @return resource the one's complement of <i>a</i>, as a GMP number.
 * @since 4.0.4
 * @since 5.0
 */
function gmp_com ($a) {}

/**
 * Bitwise XOR
 * @link http://php.net/manual/zh/function.gmp-xor.php
 * @param resource|string $a It can be either a GMP number resource, or a
 * numeric string given that it is possible to convert the latter to a number.</p>
 * @param resource|string $b It can be either a GMP number resource, or a
 * numeric string given that it is possible to convert the latter to a number.</p>
 * @return resource A GMP number resource.
 * @since 4.0.4
 * @since 5.0
 */
function gmp_xor ($a, $b) {}

/**
 * Set bit
 * @link http://php.net/manual/zh/function.gmp-setbit.php
 * @param resource|string $a <p>
 * The number being set to.
 * </p>
 * It can be either a GMP number resource, or a
 * numeric string given that it is possible to convert the latter to a number.</p>
 * @param int $index <p>
 * The set bit.
 * </p>
 * @param bool $set_clear [optional] <p>
 * Defines if the bit is set to 0 or 1. By default the bit is set to
 * 1. Index starts at 0.
 * </p>
 * @return void A GMP number resource.
 * @since 4.0.4
 * @since 5.0
 */
function gmp_setbit (&$a, $index, $set_clear = true) {}

/**
 * Clear bit
 * @link http://php.net/manual/zh/function.gmp-clrbit.php
 * @param resource|string|GMP $a It can be either a GMP number resource, or a
 * numeric string given that it is possible to convert the latter to a number.</p>
 * @param int $index It can be either a GMP number resource, or a
 * numeric string given that it is possible to convert the latter to a number.</p>
 * @return void A GMP number resource.
 * @since 4.0.4
 * @since 5.0
 */
function gmp_clrbit (&$a, $index) {}

/**
 * Scan for 0
 * @link http://php.net/manual/zh/function.gmp-scan0.php
 * @param resource|string $a <p>
 * The number to scan.
 * </p>
 * It can be either a GMP number resource, or a
 * numeric string given that it is possible to convert the latter to a number.</p>
 * @param int $start <p>
 * The starting bit.
 * </p>
 * @return int the index of the found bit, as an integer. The
 * index starts from 0.
 * @since 4.0.4
 * @since 5.0
 */
function gmp_scan0 ($a, $start) {}

/**
 * Scan for 1
 * @link http://php.net/manual/zh/function.gmp-scan1.php
 * @param resource|string $a <p>
 * The number to scan.
 * </p>
 * It can be either a GMP number resource, or a
 * numeric string given that it is possible to convert the latter to a number.</p>
 * @param int $start <p>
 * The starting bit.
 * </p>
 * @return int the index of the found bit, as an integer.
 * If no set bit is found, -1 is returned.
 * @since 4.0.4
 * @since 5.0
 */
function gmp_scan1 ($a, $start) {}

/**
 * Tests if a bit is set
 * @link http://php.net/manual/zh/function.gmp-testbit.php
 * @param resource|string|GMP $a It can be either a GMP number resource, or a
 * numeric string given that it is possible to convert the latter to a number.</p>
 * @param int $index <p>
 * The bit to test
 * </p>
 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
 * @since 5.3.0
 */
function gmp_testbit ($a, $index) {}

/**
 * Population count
 * @link http://php.net/manual/zh/function.gmp-popcount.php
 * @param resource|string $a It can be either a GMP number resource, or a
 * numeric string given that it is possible to convert the latter to a number.</p>
 * @return int The population count of <i>a</i>, as an integer.
 * @since 4.0.4
 * @since 5.0
 */
function gmp_popcount ($a) {}

/**
 * Hamming distance
 * @link http://php.net/manual/zh/function.gmp-hamdist.php
 * @param resource|string|GMP $a It can be either a GMP number resource, or a
 * numeric string given that it is possible to convert the latter to a number.</p>
 * <p>
 * It should be positive.
 * </p>
 * @param resource|string|GMP $b It can be either a GMP number resource, or a
 * numeric string given that it is possible to convert the latter to a number.</p>
 * <p>
 * It should be positive.
 * </p>
 * @return int A GMP number resource.
 * @since 4.0.4
 * @since 5.0
 */
function gmp_hamdist ($a, $b) {}

/**
 * Import from a binary string
 * @link http://php.net/manual/zh/function.gmp-import.php
 * @param string $data The binary string being imported
 * @param integer $word_size Default value is 1. The number of bytes in each chunk of binary
 * data. This is mainly used in conjunction with the options parameter.</p>
 * @param integer $options Default value is GMP_MSW_FIRST | GMP_NATIVE_ENDIAN.
 * @return GMP|bool Returns a GMP number or FALSE on failure.
 * @since 5.6.1
 */
function gmp_import ($data, $word_size = 1, $options = GMP_MSW_FIRST | GMP_NATIVE_ENDIAN) {}

/**
 * Export to a binary string
 * @link http://php.net/manual/zh/function.gmp-export.php
 * @param GMP $gmpnumber The GMP number being exported
 * @param integer $word_size Default value is 1. The number of bytes in each chunk of binary
 * data. This is mainly used in conjunction with the options parameter.</p>
 * @param integer $options Default value is GMP_MSW_FIRST | GMP_NATIVE_ENDIAN.
 * @return string|bool Returns a string or FALSE on failure.
 * @since 5.6.1
 */
function gmp_export (GMP $gmpnumber, $word_size = 1, $options = GMP_MSW_FIRST | GMP_NATIVE_ENDIAN) {}

/**
 * Takes the nth root of a and returns the integer component of the result.
 * @link http://php.net/manual/zh/function.gmp-root.php
 * @param GMP $a Either a GMP number resource in PHP 5.5 and earlier, a GMP object in PHP 5.6
 * and later, or a numeric string provided that it is possible to convert the latter to a number.</p>
 * @param integer $nth The positive root to take of a.
 * @return GMP The integer component of the resultant root, as a GMP number.
 * @since 5.6.0
 */
function gmp_root (GMP $a, $nth) {}

/**
 * Takes the nth root of a and returns the integer component and remainder of the result.
 * @link http://php.net/manual/zh/function.gmp-rootrem.php
 * @param GMP $a Either a GMP number resource in PHP 5.5 and earlier, a GMP object in PHP 5.6
 * and later, or a numeric string provided that it is possible to convert the latter to a number.</p>
 * @param integer $nth The positive root to take of a.
 * @return array|GMP[] A two element array, where the first element is the integer component of
 * the root, and the second element is the remainder, both represented as GMP numbers.</p>
 * @since 5.6.0
 */
function gmp_rootrem (GMP $a, $nth) {}

/**
 * Find next prime number
 * @link http://php.net/manual/zh/function.gmp-nextprime.php
 * @param resource|string $a It can be either a GMP number resource, or a
 * numeric string given that it is possible to convert the latter to a number.</p>
 * @return resource Return the next prime number greater than <i>a</i>,
 * as a GMP number.
 * @since 5.2.0
 */
function gmp_nextprime ($a) {}

define ('GMP_ROUND_ZERO', 0);
define ('GMP_ROUND_PLUSINF', 1);
define ('GMP_ROUND_MINUSINF', 2);
define ('GMP_MSW_FIRST', 1);
define ('GMP_LSW_FIRST', 2);
define ('GMP_LITTLE_ENDIAN', 4);
define ('GMP_BIG_ENDIAN', 8);
define ('GMP_NATIVE_ENDIAN', 16);

/**
 * The GMP library version
 * @link http://php.net/manual/zh/gmp.constants.php
 */
define ('GMP_VERSION', "");

class GMP implements Serializable {

    /**
     * String representation of object
     * @link http://php.net/manual/zh/serializable.serialize.php
     * @return string the string representation of the object or null
     * @since 5.1.0
     */
    public function serialize() {}

    /**
     * Constructs the object
     * @link http://php.net/manual/zh/serializable.unserialize.php
     * @param string $serialized <p>
     * The string representation of the object.
     * </p>
     * @return void
     * @since 5.1.0
     */
    public function unserialize($serialized) {}
}
// End of gmp v.
?>
