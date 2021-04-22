<?php
/**
 * RSS2 Feed Template for displaying RSS2 Posts feed.
 *
 * @package WordPress
 */

header( 'Content-Type: ' . feed_content_type( 'rss2' ) . '; charset=' . get_option( 'blog_charset' ), true );
$more = 1;

echo '<?xml version="1.0" encoding="' . get_option( 'blog_charset' ) . '"?' . '>';

/**
 * Fires between the xml and rss tags in a feed.
 *
 * @since 4.0.0
 *
 * @param string $context Type of feed. Possible values include 'rss2', 'rss2-comments',
 *                        'rdf', 'atom', and 'atom-comments'.
 */
do_action( 'rss_tag_pre', 'rss2' );
?>
<rss version="2.0"
     xmlns:content="http://purl.org/rss/1.0/modules/content/"
     xmlns:dc="http://purl.org/dc/elements/1.1/"
     xmlns:media="http://search.yahoo.com/mrss/"
     xmlns:atom="http://www.w3.org/2005/Atom"
     xmlns:georss="http://www.georss.org/georss">
    <?php
    do_action( 'rss2_ns' );
    ?>

    <channel>
        <title><?php wp_title_rss(); ?></title>
        <link><?php bloginfo_rss( 'url' ); ?></link>
        <description><?php bloginfo_rss( 'description' ); ?></description>
        <language><?php bloginfo_rss( 'language' ); ?></language>
        <?php
        do_action( 'rss2_head' );

        while ( have_posts() ) :
            the_post();
            ?>
            <item>
                <title><?php the_title_rss(); ?></title>
                <link><?php the_permalink_rss(); ?></link>
                <guid isPermaLink="false"><?php the_guid(); ?></guid>
                <pubDate><?php echo mysql2date( 'D, d M Y H:i:s +0000', get_post_time( 'Y-m-d H:i:s', true ), false ); ?></pubDate>
                <media:rating scheme="urn:simple">nonadult</media:rating>
                <author><?php the_author(); ?></author>
                <category><?php echo get_the_category()[0] -> name; ?></category>

                <description><![CDATA[
                    <?php the_post_thumbnail('medium')?>
                    <p><?php echo kama_excerpt( array('maxchar'=>750, 'text'=> get_the_excerpt()) ); ?>...</p>
                    <a href="<?php the_permalink(); ?>">Читать в источнике</a>]]>
                </description>


                <?php rss_enclosure(); ?>

                <?php
                do_action( 'rss2_item' );
                ?>
            </item>
        <?php endwhile; ?>
    </channel>
</rss>
