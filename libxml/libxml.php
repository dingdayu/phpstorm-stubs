<?php

// Start of libxml v.

/**
 * Contains various information about errors thrown by libxml. The error codes
 * are described within the official
 * xmlError API documentation.
 * @link http://php.net/manual/zh/class.libxmlerror.php
 */
class LibXMLError  {
	/**
	 * <p style="margin-top:0;">
	 * the severity of the error (one of the following constants:
	 * <b><code>LIBXML_ERR_WARNING</code></b>,
	 * <b><code>LIBXML_ERR_ERROR</code></b> or
	 * <b><code>LIBXML_ERR_FATAL</code></b>)
	 * </p>
	 * @var int
	 */
	public $level;
	/**
	 * <p style="margin-top:0;">
	 * The error's code.
	 * </p>
	 * @var int
	 */
	public $code;
	/**
	 * <p style="margin-top:0;">
	 * The column where the error occurred.
	 * </p>
	 * <p><b>Note</b>:
	 * </p><p>
	 * This property isn't entirely implemented in libxml and therefore
	 * 0 is often returned.
	 * </p>
	 * @var int
	 */
	public $column;
	/**
	 * <p style="margin-top:0;">
	 * The error message, if any.
	 * </p>
	 * @var string
	 */
	public $message;
	/**
	 * <p style="margin-top:0;">The filename, or empty if the XML was loaded from a string.</p>
	 * @var string
	 */
	public $file;
	/**
	 * <p style="margin-top:0;">
	 * The line where the error occurred.
	 * </p>
	 * @var int
	 */
	public $line;

}

/**
 * Set the streams context for the next libxml document load or write
 * @link http://php.net/manual/zh/function.libxml-set-streams-context.php
 * @param resource $streams_context <p>
 * The stream context resource (created with
 * <b>stream_context_create</b>)
 * </p>
 * @return void No value is returned.
 * @since 5.0
 */
function libxml_set_streams_context ($streams_context) {}

/**
 * Disable libxml errors and allow user to fetch error information as needed
 * @link http://php.net/manual/zh/function.libxml-use-internal-errors.php
 * @param bool $use_errors [optional] <p>
 * Enable (<b>TRUE</b>) user error handling or disable (<b>FALSE</b>) user error handling. Disabling will also clear any existing libxml errors.
 * </p>
 * @return bool This function returns the previous value of
 * <i>use_errors</i>.
 * @since 5.1.0
 */
function libxml_use_internal_errors ($use_errors = false) {}

/**
 * Retrieve last error from libxml
 * @link http://php.net/manual/zh/function.libxml-get-last-error.php
 * @return LibXMLError a LibXMLError object if there is any error in the
 * buffer, <b>FALSE</b> otherwise.
 * @since 5.1.0
 */
function libxml_get_last_error () {}

/**
 * Clear libxml error buffer
 * @link http://php.net/manual/zh/function.libxml-clear-errors.php
 * @return void No value is returned.
 * @since 5.1.0
 */
function libxml_clear_errors () {}

/**
 * Retrieve array of errors
 * @link http://php.net/manual/zh/function.libxml-get-errors.php
 * @return array an array with LibXMLError objects if there are any
 * errors in the buffer, or an empty array otherwise.
 * @since 5.1.0
 */
function libxml_get_errors () {}

/**
 * Disable the ability to load external entities
 * @link http://php.net/manual/zh/function.libxml-disable-entity-loader.php
 * @param bool $disable [optional] <p>
 * Disable (<b>TRUE</b>) or enable (<b>FALSE</b>) libxml extensions (such as
 * ,
 * and ) to load external entities.
 * </p>
 * @return bool the previous value.
 * @since 5.2.11
 */
function libxml_disable_entity_loader ($disable = true) {}

/**
 * Changes the default external entity loader
 * @link http://php.net/manual/zh/function.libxml-set-external-entity-loader.php
 * @param callable $resolver_function <p>
 * A callable that takes three arguments. Two strings, a public id
 * and system id, and a context (an array with four keys) as the third argument.
 * This callback should return a resource, a string from which a resource can be
 * opened, or <b>NULL</b>.
 * </p>
 * @return void No value is returned.
 * @since 5.4.0
 */
function libxml_set_external_entity_loader (callable $resolver_function) {}


/**
 * libxml version like 20605 or 20617
 * @link http://php.net/manual/zh/libxml.constants.php
 */
define ('LIBXML_VERSION', 20901);

/**
 * libxml version like 2.6.5 or 2.6.17
 * @link http://php.net/manual/zh/libxml.constants.php
 */
define ('LIBXML_DOTTED_VERSION', "2.9.1");
define ('LIBXML_LOADED_VERSION', 20901);

/**
 * Substitute entities
 * @link http://php.net/manual/zh/libxml.constants.php
 */
define ('LIBXML_NOENT', 2);

/**
 * Load the external subset
 * @link http://php.net/manual/zh/libxml.constants.php
 */
define ('LIBXML_DTDLOAD', 4);

/**
 * Default DTD attributes
 * @link http://php.net/manual/zh/libxml.constants.php
 */
define ('LIBXML_DTDATTR', 8);

/**
 * Validate with the DTD
 * @link http://php.net/manual/zh/libxml.constants.php
 */
define ('LIBXML_DTDVALID', 16);

/**
 * Suppress error reports
 * @link http://php.net/manual/zh/libxml.constants.php
 */
define ('LIBXML_NOERROR', 32);

/**
 * Suppress warning reports
 * @link http://php.net/manual/zh/libxml.constants.php
 */
define ('LIBXML_NOWARNING', 64);

/**
 * Remove blank nodes
 * @link http://php.net/manual/zh/libxml.constants.php
 */
define ('LIBXML_NOBLANKS', 256);

/**
 * Implement XInclude substitution
 * @link http://php.net/manual/zh/libxml.constants.php
 */
define ('LIBXML_XINCLUDE', 1024);

/**
 * Remove redundant namespaces declarations
 * @link http://php.net/manual/zh/libxml.constants.php
 */
define ('LIBXML_NSCLEAN', 8192);

/**
 * Merge CDATA as text nodes
 * @link http://php.net/manual/zh/libxml.constants.php
 */
define ('LIBXML_NOCDATA', 16384);

/**
 * Disable network access when loading documents
 * @link http://php.net/manual/zh/libxml.constants.php
 */
define ('LIBXML_NONET', 2048);

/**
 * Sets XML_PARSE_PEDANTIC flag, which enables pedentic error reporting.
 * @link http://php.net/manual/zh/libxml.constants.php
 * @since 5.4.0
 */
define ('LIBXML_PEDANTIC', 128);

/**
 * Activate small nodes allocation optimization. This may speed up your
 * application without needing to change the code.
 * <p>
 * Only available in Libxml &gt;= 2.6.21
 * </p>
 * @link http://php.net/manual/zh/libxml.constants.php
 */
define ('LIBXML_COMPACT', 65536);

/**
 * Allows line numbers greater than 65535 to be reported correctly.
 * <p>
 * Only available in Libxml &gt;= 2.9.0
 * </p>
 * @link http://php.net/manual/zh/libxml.constants.php
 */
define ('LIBXML_BIGLINES', 65535);


/**
 * Drop the XML declaration when saving a document
 * <p>
 * Only available in Libxml &gt;= 2.6.21
 * </p>
 * @link http://php.net/manual/zh/libxml.constants.php
 */
define ('LIBXML_NOXMLDECL', 2);

/**
 * Sets XML_PARSE_HUGE flag, which relaxes any hardcoded limit from the parser. This affects
 * limits like maximum depth of a document or the entity recursion, as well as limits of the
 * size of text nodes.
 * <p>
 * Only available in Libxml &gt;= 2.7.0 (as of PHP &gt;= 5.3.2 and PHP &gt;= 5.2.12)
 * </p>
 * @link http://php.net/manual/zh/libxml.constants.php
 */
define ('LIBXML_PARSEHUGE', 524288);

/**
 * Expand empty tags (e.g. &lt;br/&gt; to
 * &lt;br&gt;&lt;/br&gt;)
 * <p>
 * This option is currently just available in the
 * and
 * functions.
 * </p>
 * @link http://php.net/manual/zh/libxml.constants.php
 */
define ('LIBXML_NOEMPTYTAG', 4);

/**
 * Create default/fixed value nodes during XSD schema validation
 * <p>
 * Only available in Libxml &gt;= 2.6.14 (as of PHP &gt;= 5.5.2)
 * </p>
 * @link http://php.net/manual/zh/libxml.constants.php
 */
define ('LIBXML_SCHEMA_CREATE', 1);

/**
 * Sets HTML_PARSE_NOIMPLIED flag, which turns off the
 * automatic adding of implied html/body... elements.
 * <p>
 * Only available in Libxml &gt;= 2.7.7 (as of PHP &gt;= 5.4.0)
 * </p>
 * @link http://php.net/manual/zh/libxml.constants.php
 */
define ('LIBXML_HTML_NOIMPLIED', 8192);

/**
 * Sets HTML_PARSE_NODEFDTD flag, which prevents a default doctype
 * being added when one is not found.
 * <p>
 * Only available in Libxml &gt;= 2.7.8 (as of PHP &gt;= 5.4.0)
 * </p>
 * @link http://php.net/manual/zh/libxml.constants.php
 */
define ('LIBXML_HTML_NODEFDTD', 4);

/**
 * No errors
 * @link http://php.net/manual/zh/libxml.constants.php
 */
define ('LIBXML_ERR_NONE', 0);

/**
 * A simple warning
 * @link http://php.net/manual/zh/libxml.constants.php
 */
define ('LIBXML_ERR_WARNING', 1);

/**
 * A recoverable error
 * @link http://php.net/manual/zh/libxml.constants.php
 */
define ('LIBXML_ERR_ERROR', 2);

/**
 * A fatal error
 * @link http://php.net/manual/zh/libxml.constants.php
 */
define ('LIBXML_ERR_FATAL', 3);

// End of libxml v.
