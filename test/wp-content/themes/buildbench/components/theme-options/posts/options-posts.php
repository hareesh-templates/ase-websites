<?php
// Buildbench post featured video metabox
CSF::createMetabox('buildbench_post_video_meta', array(
	'title'        => esc_html__('Featured Video', 'buildbench'),
	'post_type'    => 'post',
	'post_formats' => 'video',
	'context'      => 'side',
	'theme'        => 'light',
	'data_type'    => 'unserialize',
));

// Buildbench featured video url
CSF::createSection('buildbench_post_video_meta', array(
	'fields' => array(
		array(
			'title' => esc_html__('Video URL', 'buildbench'),
			'desc'  => esc_html__('Paste a video link from Youtube, Vimeo, Dailymotion, Facebook or Twitter it will be embedded in the post and the thumb used as the featured image of this post. You need to choose "Video Format" as post format to use "Featured Video".', 'buildbench'),
			'type'  => 'text',
			'id'    => 'featured_video',
		),
	)
));

