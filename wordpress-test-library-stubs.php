<?php

/**
 * Unit Tests: Basic_Object cloass
 *
 * @package WordPress
 * @subpackage UnitTests
 * @since 4.7.0
 */
/**
 * Class used to test accessing methods and properties
 *
 * @since 4.0.0
 */
class Basic_Object
{
    private $foo = 'bar';
    public function __get($name)
    {
    }
    public function __set($name, $value)
    {
    }
    public function __isset($name)
    {
    }
    public function __unset($name)
    {
    }
    public function __call($name, $arguments)
    {
    }
    // phpcs:ignore WordPress.NamingConventions.ValidFunctionName.MethodNameInvalid
    private function callMe()
    {
    }
}
/**
 * Class used to test accessing methods and properties.
 *
 * @since 4.0.0
 */
class Basic_Subclass extends \Basic_Object
{
}
/**
 * WP_Fake_Block_Type for testing
 *
 * @package WordPress
 * @subpackage Blocks
 * @since 5.0.0
 */
/**
 * Test class extending WP_Block_Type
 *
 * @since 5.0.0
 */
class WP_Fake_Block_Type extends \WP_Block_Type
{
    /**
     * Render the fake block.
     *
     * @param array  $attributes Optional. Block attributes. Default empty array.
     * @param string $content    Optional. Block content. Default empty string.
     * @return string Rendered block HTML.
     */
    public function render($attributes = array(), $content = '')
    {
    }
}
/**
 * Unit tests covering WP_REST_Controller functionality using a flexible schema.
 *
 * @package WordPress
 * @subpackage REST API
 * @since 5.4.0
 */
/**
 * WP_REST_Test_Configurable_Controller class.
 *
 * @group restapi
 *
 * @since 5.4.0
 */
class WP_REST_Test_Configurable_Controller extends \WP_REST_Controller
{
    /**
     * Test schema.
     *
     * @since 5.4.0
     *
     * @var array $test_schema
     */
    protected $test_schema;
    /**
     * Class constructor.
     *
     * @since 5.4.0
     *
     * @param array $test_schema Schema for use in testing.
     */
    public function __construct($test_schema)
    {
    }
    /**
     * Provides the test schema.
     *
     * @since 5.4.0
     *
     * @return array Test schema.
     */
    public function get_test_schema()
    {
    }
    /**
     * Get the item's schema, conforming to JSON Schema.
     *
     * @since 5.4.0
     *
     * @return array
     */
    public function get_item_schema()
    {
    }
}
/**
 * REST API: WP_REST_Test_Search_Handler class
 *
 * @package WordPress
 * @subpackage REST_API
 */
/**
 * Test class extending WP_REST_Search_Handler
 */
class WP_REST_Test_Search_Handler extends \WP_REST_Search_Handler
{
    protected $items = array();
    public function __construct($amount = 10)
    {
    }
    public function search_items(\WP_REST_Request $request)
    {
    }
    public function prepare_item($id, array $fields)
    {
    }
    public function prepare_item_links($id)
    {
    }
}
/**
 * Class WP_Sitemaps_Empty_Test_Provider.
 *
 * Provides test data for additional registered providers.
 */
class WP_Sitemaps_Empty_Test_Provider extends \WP_Sitemaps_Provider
{
    /**
     * WP_Sitemaps_Empty_Test_Provider constructor.
     *
     * @param string $object_type Optional. Object type name to use. Default 'test'.
     */
    public function __construct($object_type = 'test')
    {
    }
    /**
     * Gets a URL list for a sitemap.
     *
     * @param int    $page_num       Page of results.
     * @param string $object_subtype Optional. Object subtype name. Default empty.
     * @return array[] Array of URL information for a sitemap.
     */
    public function get_url_list($page_num, $object_subtype = '')
    {
    }
    /**
     * Query for determining the number of pages.
     *
     * @param string $object_subtype Optional. Object subtype. Default empty.
     * @return int Total number of pages.
     */
    public function get_max_num_pages($object_subtype = '')
    {
    }
}
/**
 * Class WP_Sitemaps_Large_Test_Provider.
 *
 * Provides test data for additional registered providers.
 */
class WP_Sitemaps_Large_Test_Provider extends \WP_Sitemaps_Provider
{
    /**
     * Number of entries in the sitemap the provider produces.
     *
     * @var integer
     */
    public $num_entries = 1;
    /**
     * WP_Sitemaps_Large_Test_Provider constructor.
     *
     * @param int $num_entries Optional. Number of entries in in the sitemap.
     */
    public function __construct($num_entries = 50001)
    {
    }
    /**
     * Gets a URL list for a sitemap.
     *
     * @param int    $page_num       Page of results.
     * @param string $object_subtype Optional. Object subtype name. Default empty.
     * @return array[] Array of URL information for a sitemap.
     */
    public function get_url_list($page_num, $object_subtype = '')
    {
    }
    /**
     * Lists sitemap pages exposed by this provider.
     *
     * The returned data is used to populate the sitemap entries of the index.
     *
     * @return array[] Array of sitemap entries.
     */
    public function get_sitemap_entries()
    {
    }
    /**
     * Query for determining the number of pages.
     *
     * @param string $object_subtype Optional. Object subtype. Default empty.
     * @return int Total number of pages.
     */
    public function get_max_num_pages($object_subtype = '')
    {
    }
}
/**
 * Class WP_Sitemaps_Test_Provider.
 *
 * Provides test data for additional registered providers.
 */
class WP_Sitemaps_Test_Provider extends \WP_Sitemaps_Provider
{
    /**
     * WP_Sitemaps_Posts constructor.
     *
     * @param string $object_type Optional. Object type name to use. Default 'test'.
     */
    public function __construct($object_type = 'test')
    {
    }
    /**
     * Return the public post types, which excludes nav_items and similar types.
     * Attachments are also excluded. This includes custom post types with public = true
     *
     * @return array Map of object subtype objects (WP_Post_Type) keyed by their name.
     */
    public function get_object_subtypes()
    {
    }
    /**
     * Gets a URL list for a sitemap.
     *
     * @param int    $page_num       Page of results.
     * @param string $object_subtype Optional. Object subtype name. Default empty.
     * @return array[] Array of URL information for a sitemap.
     */
    public function get_url_list($page_num, $object_subtype = '')
    {
    }
    /**
     * Query for determining the number of pages.
     *
     * @param string $object_subtype Optional. Object subtype. Default empty.
     * @return int Total number of pages.
     */
    public function get_max_num_pages($object_subtype = '')
    {
    }
}
class WP_Tests_Exception extends \PHPUnit_Framework_Exception
{
}
/**
 * General exception for wp_die().
 */
class WPDieException extends \Exception
{
}
/**
 * Exception for cases of wp_die(), for Ajax tests.
 *
 * This means there was an error (no output, and a call to wp_die).
 *
 * @package    WordPress
 * @subpackage Unit Tests
 * @since      3.4.0
 */
class WPAjaxDieStopException extends \WPDieException
{
}
/**
 * Exception for cases of wp_die(), for Ajax tests.
 *
 * This means the execution of the Ajax function should be halted, but the unit test
 * can continue. The function finished normally and there was no error (output happened,
 * but wp_die was called to end execution). This is used with WP_Ajax_Response::send().
 *
 * @package    WordPress
 * @subpackage Unit Tests
 * @since      3.4.0
 */
class WPAjaxDieContinueException extends \WPDieException
{
}
class WP_UnitTest_Factory_Callback_After_Create
{
    /**
     * @var callable
     */
    public $callback;
    /**
     * WP_UnitTest_Factory_Callback_After_Create constructor.
     *
     * @param callable $callback A callback function.
     */
    public function __construct($callback)
    {
    }
    /**
     * Calls the set callback on a given object.
     *
     * @param mixed $object The object to apply the callback on.
     *
     * @return mixed The possibly altered object.
     */
    public function call($object)
    {
    }
}
/**
 * Unit test factory for posts.
 *
 * Note: The below @method notations are defined solely for the benefit of IDEs,
 * as a way to indicate expected return values from the given factory methods.
 *
 * @method int create( $args = array(), $generation_definitions = null )
 * @method WP_Post create_and_get( $args = array(), $generation_definitions = null )
 * @method int[] create_many( $count, $args = array(), $generation_definitions = null )
 */
class WP_UnitTest_Factory_For_Post extends \WP_UnitTest_Factory_For_Thing
{
    public function __construct($factory = \null)
    {
    }
    /**
     * Creates a post object.
     *
     * @param array $args Array with elements for the post.
     *
     * @return int The post ID on success. The value 0 on failure.
     */
    public function create_object($args)
    {
    }
    /**
     * Updates an existing post object.
     *
     * @param int   $post_id ID of the post to update.
     * @param array $fields  Post data.
     *
     * @return int The post ID on success. The value 0 on failure.
     */
    public function update_object($post_id, $fields)
    {
    }
    /**
     * Retrieves a post by a given ID.
     *
     * @param int $post_id ID of the post to retrieve.
     *
     * @return WP_Post|null WP_Post object on success, null on failure.
     */
    public function get_object_by_id($post_id)
    {
    }
}
class WP_UnitTest_Factory_For_Attachment extends \WP_UnitTest_Factory_For_Post
{
    /**
     * Create an attachment fixture.
     *
     * @param array $args {
     *     Array of arguments. Accepts all arguments that can be passed to
     *     wp_insert_attachment(), in addition to the following:
     *     @type int    $post_parent ID of the post to which the attachment belongs.
     *     @type string $file        Path of the attached file.
     * }
     * @param int   $legacy_parent Deprecated.
     * @param array $legacy_args   Deprecated.
     *
     * @return int|WP_Error The attachment ID on success. The value 0 or WP_Error on failure.
     */
    public function create_object($args, $legacy_parent = 0, $legacy_args = array())
    {
    }
    /**
     * Saves an attachment.
     *
     * @param string $file   The file name to create attachment object for.
     * @param int    $parent ID of the post to attach the file to.
     *
     * @return int|WP_Error The attachment ID on success. The value 0 or WP_Error on failure.
     */
    public function create_upload_object($file, $parent = 0)
    {
    }
}
/**
 * Unit test factory for sites on a multisite network.
 *
 * Note: The below @method notations are defined solely for the benefit of IDEs,
 * as a way to indicate expected return values from the given factory methods.
 *
 * @method int create( $args = array(), $generation_definitions = null )
 * @method WP_Site create_and_get( $args = array(), $generation_definitions = null )
 * @method int[] create_many( $count, $args = array(), $generation_definitions = null )
 */
class WP_UnitTest_Factory_For_Blog extends \WP_UnitTest_Factory_For_Thing
{
    public function __construct($factory = \null)
    {
    }
    /**
     * Creates a site object.
     *
     * @param array $args Arguments for the site object.
     *
     * @return int|WP_Error The site ID on success, WP_Error object on failure.
     */
    public function create_object($args)
    {
    }
    /**
     * Updates a site object. Not implemented.
     *
     * @param int   $blog_id ID of the site to update.
     * @param array $fields  The fields to update.
     *
     * @return void
     */
    public function update_object($blog_id, $fields)
    {
    }
    /**
     * Retrieves a site by a given ID.
     *
     * @param int $blog_id ID of the site to retrieve.
     *
     * @return WP_Site|null The site object on success, null on failure.
     */
    public function get_object_by_id($blog_id)
    {
    }
}
/**
 * Factory for creating fixtures for the deprecated Links/Bookmarks API.
 *
 * Note: The below @method notations are defined solely for the benefit of IDEs,
 * as a way to indicate expected return values from the given factory methods.
 *
 * @since 4.6.0
 *
 * @method int create( $args = array(), $generation_definitions = null )
 * @method object create_and_get( $args = array(), $generation_definitions = null )
 * @method int[] create_many( $count, $args = array(), $generation_definitions = null )
 */
class WP_UnitTest_Factory_For_Bookmark extends \WP_UnitTest_Factory_For_Thing
{
    public function __construct($factory = \null)
    {
    }
    public function create_object($args)
    {
    }
    public function update_object($link_id, $fields)
    {
    }
    public function get_object_by_id($link_id)
    {
    }
}
/**
 * Unit test factory for comments.
 *
 * Note: The below @method notations are defined solely for the benefit of IDEs,
 * as a way to indicate expected return values from the given factory methods.
 *
 * @method int create( $args = array(), $generation_definitions = null )
 * @method WP_Comment create_and_get( $args = array(), $generation_definitions = null )
 * @method int[] create_many( $count, $args = array(), $generation_definitions = null )
 */
class WP_UnitTest_Factory_For_Comment extends \WP_UnitTest_Factory_For_Thing
{
    public function __construct($factory = \null)
    {
    }
    /**
     * Inserts a comment.
     *
     * @param array $args The comment details.
     *
     * @return int|false The comment's ID on success, false on failure.
     */
    public function create_object($args)
    {
    }
    /**
     * Updates a comment.
     *
     * @param int   $comment_id The comment ID.
     * @param array $fields     The comment details.
     *
     * @return int The value 1 if the comment was updated, 0 if not updated.
     */
    public function update_object($comment_id, $fields)
    {
    }
    /**
     * Creates multiple comments on a given post.
     *
     * @param int   $post_id                ID of the post to create comments for.
     * @param int   $count                  Total amount of comments to create.
     * @param array $args                   The comment details.
     * @param null  $generation_definitions Default values.
     *
     * @return int[] Array with the comment IDs.
     */
    public function create_post_comments($post_id, $count = 1, $args = array(), $generation_definitions = \null)
    {
    }
    /**
     * Retrieves a comment by a given ID.
     *
     * @param int $comment_id ID of the comment to retrieve.
     *
     * @return WP_Comment|null WP_Comment object on success, null on failure.
     */
    public function get_object_by_id($comment_id)
    {
    }
}
/**
 * Unit test factory for networks.
 *
 * Note: The below @method notations are defined solely for the benefit of IDEs,
 * as a way to indicate expected return values from the given factory methods.
 *
 * @method int create( $args = array(), $generation_definitions = null )
 * @method WP_Network create_and_get( $args = array(), $generation_definitions = null )
 * @method int[] create_many( $count, $args = array(), $generation_definitions = null )
 */
class WP_UnitTest_Factory_For_Network extends \WP_UnitTest_Factory_For_Thing
{
    public function __construct($factory = \null)
    {
    }
    public function create_object($args)
    {
    }
    public function update_object($network_id, $fields)
    {
    }
    public function get_object_by_id($network_id)
    {
    }
}
/**
 * Unit test factory for terms.
 *
 * Note: The below @method notations are defined solely for the benefit of IDEs,
 * as a way to indicate expected return values from the given factory methods.
 *
 * @method int create( $args = array(), $generation_definitions = null )
 * @method WP_Term create_and_get( $args = array(), $generation_definitions = null )
 * @method int[] create_many( $count, $args = array(), $generation_definitions = null )
 */
class WP_UnitTest_Factory_For_Term extends \WP_UnitTest_Factory_For_Thing
{
    private $taxonomy;
    const DEFAULT_TAXONOMY = 'post_tag';
    public function __construct($factory = \null, $taxonomy = \null)
    {
    }
    /**
     * Creates a term object.
     *
     * @param array $args Array or string of arguments for inserting a term.
     *
     * @return array|WP_Error
     */
    public function create_object($args)
    {
    }
    /**
     * Updates the term.
     *
     * @param int|object   $term   The term to update.
     * @param array|string $fields The context in which to relate the term to the object.
     *
     * @return int The term ID.
     */
    public function update_object($term, $fields)
    {
    }
    /**
     * Attach terms to the given post.
     *
     * @param int          $post_id  The post ID.
     * @param string|array $terms    An array of terms to set for the post, or a string of terms
     *                               separated by commas. Hierarchical taxonomies must always pass IDs rather
     *                               than names so that children with the same names but different parents
     *                               aren't confused.
     * @param string       $taxonomy Taxonomy name.
     * @param bool         $append   Optional. If true, don't delete existing terms, just add on. If false,
     *                               replace the terms with the new terms. Default true.
     *
     * @return array|false|WP_Error Array of term taxonomy IDs of affected terms. WP_Error or false on failure.
     */
    public function add_post_terms($post_id, $terms, $taxonomy, $append = \true)
    {
    }
    /**
     * Create a term and returns it as an object.
     *
     * @param array $args                   Array or string of arguments for inserting a term.
     * @param null  $generation_definitions The default values.
     *
     * @return WP_Term|WP_Error|null WP_Term on success. WP_Error if taxonomy does not exist. Null for miscellaneous failure.
     */
    public function create_and_get($args = array(), $generation_definitions = \null)
    {
    }
    /**
     * Retrieves the term by a given ID.
     *
     * @param int $term_id ID of the term to retrieve.
     *
     * @return WP_Term|WP_Error|null WP_Term on success. WP_Error if taxonomy does not exist. Null for miscellaneous failure.
     */
    public function get_object_by_id($term_id)
    {
    }
}
/**
 * Unit test factory for users.
 *
 * Note: The below @method notations are defined solely for the benefit of IDEs,
 * as a way to indicate expected return values from the given factory methods.
 *
 * @method int create( $args = array(), $generation_definitions = null )
 * @method WP_User create_and_get( $args = array(), $generation_definitions = null )
 * @method int[] create_many( $count, $args = array(), $generation_definitions = null )
 */
class WP_UnitTest_Factory_For_User extends \WP_UnitTest_Factory_For_Thing
{
    public function __construct($factory = \null)
    {
    }
    /**
     * Inserts an user.
     *
     * @param array $args The user data to insert.
     *
     * @return int|WP_Error The user ID on success, WP_Error object on failure.
     */
    public function create_object($args)
    {
    }
    /**
     * Updates the user data.
     *
     * @param int   $user_id ID of the user to update.
     * @param array $fields  The user data to update.
     *
     * @return int|WP_Error The user ID on success, WP_Error object on failure.
     */
    public function update_object($user_id, $fields)
    {
    }
    /**
     * Retrieves the user for a given ID.
     *
     * @param int $user_id ID of the user ID to retrieve.
     *
     * @return WP_User The user object.
     */
    public function get_object_by_id($user_id)
    {
    }
}
/**
 * A factory for making WordPress data with a cross-object type API.
 *
 * Tests should use this factory to generate test fixtures.
 */
class WP_UnitTest_Factory
{
    /**
     * Generates post fixtures for use in tests.
     *
     * @var WP_UnitTest_Factory_For_Post
     */
    public $post;
    /**
     * Generates attachment fixtures for use in tests.
     *
     * @var WP_UnitTest_Factory_For_Attachment
     */
    public $attachment;
    /**
     * Generates comment fixtures for use in tests.
     *
     * @var WP_UnitTest_Factory_For_Comment
     */
    public $comment;
    /**
     * Generates user fixtures for use in tests.
     *
     * @var WP_UnitTest_Factory_For_User
     */
    public $user;
    /**
     * Generates taxonomy term fixtures for use in tests.
     *
     * @var WP_UnitTest_Factory_For_Term
     */
    public $term;
    /**
     * Generates category fixtures for use in tests.
     *
     * @var WP_UnitTest_Factory_For_Term
     */
    public $category;
    /**
     * Generates tag fixtures for use in tests.
     *
     * @var WP_UnitTest_Factory_For_Term
     */
    public $tag;
    /**
     * Generates bookmark (link) fixtures for use in tests.
     *
     * @since 4.6.0
     * @var WP_UnitTest_Factory_For_Bookmark
     */
    public $bookmark;
    /**
     * Generates blog (site) fixtures for use in Multisite tests.
     *
     * @var WP_UnitTest_Factory_For_Blog
     */
    public $blog;
    /**
     * Generates network fixtures for use in Multisite tests.
     *
     * @var WP_UnitTest_Factory_For_Network
     */
    public $network;
    public function __construct()
    {
    }
}
class WP_UnitTest_Generator_Sequence
{
    public static $incr = -1;
    public $next;
    public $template_string;
    public function __construct($template_string = '%s', $start = \null)
    {
    }
    public function next()
    {
    }
    /**
     * Get the incrementor.
     *
     * @since 4.6.0
     *
     * @return int
     */
    public function get_incr()
    {
    }
    /**
     * Get the template string.
     *
     * @since 4.6.0
     *
     * @return string
     */
    public function get_template_string()
    {
    }
}
class WP_Filesystem_MockFS extends \WP_Filesystem_Base
{
    private $cwd;
    // Holds a array of objects which contain an array of objects, etc.
    private $fs = \null;
    // Holds a array of /path/to/file.php and /path/to/dir/ map to an object in $fs above.
    // A fast, more efficient way of determining if a path exists, and access to that node.
    private $fs_map = array();
    public $verbose = \false;
    // Enable to debug WP_Filesystem_Base::find_folder() / etc.
    public $errors = array();
    public $method = 'MockFS';
    public function __construct()
    {
    }
    public function connect()
    {
    }
    // Copy of core's function, but accepts a path.
    public function abspath($path = \false)
    {
    }
    // Mock FS-specific functions:
    /**
     * Sets initial filesystem environment and/or clears the current environment.
     * Can also be passed the initial filesystem to be setup which is passed to self::setfs()
     */
    public function init($paths = '', $home_dir = '/')
    {
    }
    /**
     * "Bulk Loads" a filesystem into the internal virtual filesystem
     */
    public function setfs($paths)
    {
    }
    /**
     * Locates a filesystem "node"
     */
    private function locate_node($path)
    {
    }
    /**
     * Locates a filesystem node for the parent of the given item
     */
    private function locate_parent_node($path)
    {
    }
    // Here starteth the WP_Filesystem functions.
    public function mkdir($path, $chmod = \false, $chown = \false, $chgrp = \false)
    {
    }
    public function put_contents($path, $contents = '', $mode = \null)
    {
    }
    public function get_contents($file)
    {
    }
    public function cwd()
    {
    }
    public function chdir($path)
    {
    }
    public function exists($path)
    {
    }
    public function is_file($file)
    {
    }
    public function is_dir($path)
    {
    }
    public function dirlist($path = '.', $include_hidden = \true, $recursive = \false)
    {
    }
}
class MockFS_Node
{
    public $name;
    // The "name" of the entry, does not include a slash (exception, root).
    public $type;
    // The type of the entry 'f' for file, 'd' for directory.
    public $path;
    // The full path to the entry.
    public function __construct($path)
    {
    }
    public function is_file()
    {
    }
    public function is_dir()
    {
    }
}
class MockFS_Directory_Node extends \MockFS_Node
{
    public $type = 'd';
    public $children = array();
}
class MockFS_File_Node extends \MockFS_Node
{
    public $type = 'f';
    public $contents = '';
    // The contents of the file.
    public function __construct($path, $contents = '')
    {
    }
}
class WP_Image_Editor_Mock extends \WP_Image_Editor
{
    public static $load_return = \true;
    public static $test_return = \true;
    public static $save_return = array();
    public static $spy = array();
    public static $edit_return = array();
    public static $size_return = \null;
    // Allow testing of jpeg_quality filter.
    public function set_mime_type($mime_type = \null)
    {
    }
    public function load()
    {
    }
    public static function test($args = array())
    {
    }
    public static function supports_mime_type($mime_type)
    {
    }
    public function resize($max_w, $max_h, $crop = \false)
    {
    }
    public function multi_resize($sizes)
    {
    }
    public function crop($src_x, $src_y, $src_w, $src_h, $dst_w = \null, $dst_h = \null, $src_abs = \false)
    {
    }
    public function rotate($angle)
    {
    }
    public function flip($horz, $vert)
    {
    }
    public function save($destfilename = \null, $mime_type = \null)
    {
    }
    public function stream($mime_type = \null)
    {
    }
    public function get_size()
    {
    }
}
/**
 * File for Mock_Invokable class.
 *
 * @package WordPress
 * @subpackage UnitTests
 */
/**
 * Class Mock_Invokable.
 *
 * This class is used to mock a class that has an `__invoke` method.
 */
class Mock_Invokable
{
    public function __invoke()
    {
    }
}
class Spy_REST_Server extends \WP_REST_Server
{
    public $sent_headers = array();
    public $sent_body = '';
    public $last_request = \null;
    public $override_by_default = \false;
    public $status = \null;
    /**
     * Gets the raw $endpoints data from the server.
     *
     * @return array
     */
    public function get_raw_endpoint_data()
    {
    }
    /**
     * Allow calling protected methods from tests.
     *
     * @param string $method Method to call.
     * @param array  $args   Arguments to pass to the method.
     * @return mixed
     */
    public function __call($method, $args)
    {
    }
    /**
     * Adds a header to the list of sent headers.
     *
     * @param string $header Header name.
     * @param string $value  Header value.
     */
    public function send_header($header, $value)
    {
    }
    /**
     * Removes a header from the list of sent headers.
     *
     * @param string $header Header name.
     */
    public function remove_header($header)
    {
    }
    /**
     * Stores last set status.
     *
     * @param int $code HTTP status.
     */
    public function set_status($status)
    {
    }
    /**
     * Overrides the dispatch method so we can get a handle on the request object.
     *
     * @param  WP_REST_Request $request Request to attempt dispatching.
     * @return WP_REST_Response Response returned by the callback.
     */
    public function dispatch($request)
    {
    }
    /**
     * Overrides the register_route method so we can re-register routes internally if needed.
     *
     * @param string $namespace  Namespace.
     * @param string $route      The REST route.
     * @param array  $route_args Route arguments.
     * @param bool   $override   Optional. Whether the route should be overridden if it already exists.
     *                           Default false. Also set `$GLOBALS['wp_rest_server']->override_by_default = true`
     *                           to set overrides when you don't have access to the caller context.
     */
    public function register_route($namespace, $route, $route_args, $override = \false)
    {
    }
    /**
     * Serves the request and returns the result.
     *
     * @param string $path Optional. The request route. If not set, `$_SERVER['PATH_INFO']` will be used.
     *                     Default null.
     * @return null|false Null if not served and a HEAD request, false otherwise.
     */
    public function serve_request($path = \null)
    {
    }
}
/**
 * Basic abstract test class.
 *
 * All WordPress unit tests should inherit from this class.
 */
abstract class WP_UnitTestCase extends \WP_UnitTestCase_Base
{
}
abstract class WP_Canonical_UnitTestCase extends \WP_UnitTestCase
{
    public static $old_current_user;
    public static $author_id;
    public static $post_ids = array();
    public static $comment_ids = array();
    public static $term_ids = array();
    public static $terms = array();
    public static $old_options = array();
    /**
     * This can be defined in a subclass of this class which contains its own data() method.
     * Those tests will be run against the specified permastruct.
     */
    public $structure = '/%year%/%monthnum%/%day%/%postname%/';
    public static function wpSetUpBeforeClass(\WP_UnitTest_Factory $factory)
    {
    }
    public static function wpTearDownAfterClass()
    {
    }
    public function set_up()
    {
    }
    /**
     * Generate fixtures to be shared between canonical tests.
     *
     * Abstracted here because it's invoked by setUpBeforeClass() in more than one class.
     *
     * @since 4.1.0
     */
    public static function generate_shared_fixtures(\WP_UnitTest_Factory $factory)
    {
    }
    /**
     * Clean up shared fixtures.
     *
     * @since 4.1.0
     */
    public static function delete_shared_fixtures()
    {
    }
    /**
     * Assert that a given URL is the same a the canonical URL generated by WP.
     *
     * @since 4.1.0
     *
     * @param string $test_url                Raw URL that will be run through redirect_canonical().
     * @param string $expected                Expected string.
     * @param int    $ticket                  Optional. Trac ticket number.
     * @param array  $expected_doing_it_wrong Array of class/function names expected to throw _doing_it_wrong() notices.
     */
    public function assertCanonical($test_url, $expected, $ticket = 0, $expected_doing_it_wrong = array())
    {
    }
    /**
     * Get the canonical URL given a raw URL.
     *
     * @param string $test_url Should be relative to the site "front", ie /category/uncategorized/
     *                         as opposed to http://example.com/category/uncategorized/
     * @return $can_url Returns the original $test_url if no canonical can be generated, otherwise returns
     *                  the fully-qualified URL as generated by redirect_canonical().
     */
    public function get_canonical($test_url)
    {
    }
}
abstract class WP_Test_REST_TestCase extends \WP_UnitTestCase
{
    protected function assertErrorResponse($code, $response, $status = \null)
    {
    }
}
abstract class WP_Test_REST_Controller_Testcase extends \WP_Test_REST_TestCase
{
    protected $server;
    public function set_up()
    {
    }
    public function tear_down()
    {
    }
    public abstract function test_register_routes();
    public abstract function test_context_param();
    public abstract function test_get_items();
    public abstract function test_get_item();
    public abstract function test_create_item();
    public abstract function test_update_item();
    public abstract function test_delete_item();
    public abstract function test_prepare_item();
    public abstract function test_get_item_schema();
    public function filter_rest_url_for_leading_slash($url, $path)
    {
    }
}
abstract class WP_Test_XML_TestCase extends \WP_UnitTestCase
{
    /**
     * Load XML from a string.
     *
     * @param string $xml
     * @param int    $options Bitwise OR of the {@link https://www.php.net/manual/en/libxml.constants.php libxml option constants}.
     *                        Default is 0.
     * @return DOMDocument The DOMDocument object loaded from the XML.
     */
    public function loadXML($xml, $options = 0)
    {
    }
    /**
     * Normalize an XML document to make comparing two documents easier.
     *
     * @param string $xml
     * @param int    $options Bitwise OR of the {@link https://www.php.net/manual/en/libxml.constants.php libxml option constants}.
     *                        Default is 0.
     * @return string The normalized form of `$xml`.
     */
    public function normalizeXML($xml, $options = 0)
    {
    }
    /**
     * Reports an error identified by `$message` if the namespace normalized form of the XML document in `$actualXml`
     * is equal to the namespace normalized form of the XML document in `$expectedXml`.
     *
     * This is similar to {@link https://phpunit.de/manual/6.5/en/appendixes.assertions.html#appendixes.assertions.assertXmlStringEqualsXmlString assertXmlStringEqualsXmlString()}
     * except that differences in namespace prefixes are normalized away, such that given
     * `$actualXml = "<root xmlns='urn:wordpress.org'><child/></root>";` and
     * `$expectedXml = "<ns0:root xmlns:ns0='urn:wordpress.org'><ns0:child></ns0:root>";`
     * then `$this->assertXMLEquals( $expectedXml, $actualXml )` will succeed.
     *
     * @param string $expectedXml
     * @param string $actualXml
     * @param string $message   Optional. Message to display when the assertion fails.
     */
    public function assertXMLEquals($expectedXml, $actualXml, $message = '')
    {
    }
    /**
     * Reports an error identified by `$message` if the namespace normalized form of the XML document in `$actualXml`
     * is not equal to the namespace normalized form of the XML document in `$expectedXml`.
     *
     * This is similar to {@link https://phpunit.de/manual/6.5/en/appendixes.assertions.html#appendixes.assertions.assertXmlStringEqualsXmlString assertXmlStringNotEqualsXmlString()}
     * except that differences in namespace prefixes are normalized away, such that given
     * `$actualXml = "<root xmlns='urn:wordpress.org'><child></root>";` and
     * `$expectedXml = "<ns0:root xmlns:ns0='urn:wordpress.org'><ns0:child/></ns0:root>";`
     * then `$this->assertXMLNotEquals( $expectedXml, $actualXml )` will fail.
     *
     * @param string $expectedXml
     * @param string $actualXml
     * @param string $message   Optional. Message to display when the assertion fails.
     */
    public function assertXMLNotEquals($expectedXml, $actualXml, $message = '')
    {
    }
}
abstract class WP_XMLRPC_UnitTestCase extends \WP_UnitTestCase
{
    /**
     * @var wp_xmlrpc_server
     */
    protected $myxmlrpcserver;
    public function set_up()
    {
    }
    public function tear_down()
    {
    }
    protected static function make_user_by_role($role)
    {
    }
}
class TracTickets
{
    /**
     * When open tickets for a Trac installation is requested, the results are stored here.
     *
     * @var array
     */
    protected static $trac_ticket_cache = array();
    /**
     * Checks if Trac ticket #$ticket_id is resolved.
     *
     * @return bool|null True if the ticket is resolved, false if not resolved, null on error.
     */
    public static function isTracTicketClosed($trac_url, $ticket_id)
    {
    }
    // phpcs:ignore WordPress.NamingConventions.ValidFunctionName.MethodNameInvalid
    public static function usingLocalCache()
    {
    }
    // phpcs:ignore WordPress.NamingConventions.ValidFunctionName.MethodNameInvalid
    public static function forcingKnownBugs()
    {
    }
}
// Thanks WordPress...
function is_ssl()
{
}
function data_whole_posts()
{
}
/*
Plugin Name: Dummy Plugin
Plugin URI: https://wordpress.org/
Description: For testing purposes only.
Version: 1.0.0
Text Domain: internationalized-plugin
*/
function i18n_plugin_test()
{
}
function register_theme_blocks()
{
}
// Minimum functions.php to pass unit tests.
function default_widgets_init()
{
}
function default_after_setup_theme()
{
}
/**
 * Dummy theme.
 */
function i18n_theme_test()
{
}
/**
 * Legacy plural form function.
 *
 * @param int $nplurals
 * @param string $expression
 */
function tests_make_plural_form_function($nplurals, $expression)
{
}
namespace {
    /**
     * @property WP_UnitTest_Factory $factory
     */
    abstract class WP_UnitTestCase_Base extends PHPUnit\Framework\TestCase {
    }
}
