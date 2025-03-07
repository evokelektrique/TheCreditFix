<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

// Product
add_action('carbon_fields_register_fields', 'a4a_attach_term_meta');

// Theme options
add_action('carbon_fields_register_fields', 'a4a_attach_theme_options');

// Menu items
add_action('carbon_fields_register_fields', 'a4a_attach_nav_menu_meta');

// Menu items
function a4a_attach_nav_menu_meta() {
}

// Product
function a4a_attach_term_meta() {

  // Product fields
  Container::make('post_meta', "Credit card information")
    ->where('post_type', '=', 'product')
    ->add_fields([
      Field::make('text', 'credit_card_name', "name"),
      Field::make('text', 'credit_card_opened', "opened"),
      Field::make('text', 'credit_card_payment_status', "status"),
      Field::make('text', 'credit_card_payment_utilization', "utilization"),
      Field::make('text', 'credit_card_bank', "bank"),
      Field::make('text', 'credit_card_expire_date', "expire_date"),
      Field::make('text', 'credit_card_card_number', "card_number"),
      Field::make('text', 'credit_card_age', "Age"),
      Field::make('text', 'credit_card_limit', "limit"),
      Field::make('text', 'credit_card_report_by', "report_by"),
      Field::make('text', 'credit_card_avg_reviewer_increase', "avg_reviewer_increase"),
    ]);


  Container::make('post_meta', 'Custom Data')
    ->where('post_type', '=', 'page')
    ->add_fields([

      Field::make('separator', 'tcf_separator_13', "Page Information"),
      Field::make('text', 'tcf_credit_card_hero_feature_title',  "tcf_credit_card_hero_feature_title")->set_width(50),
      Field::make('text', 'tcf_credit_card_hero_feature_description',  "tcf_credit_card_hero_feature_description")->set_width(50),

      Field::make('complex', 'tcf_credit_card_hero_features', "tcf_credit_card_hero_features")
        ->add_fields([
          Field::make('text', 'title',  "Title")->set_width(50),
          Field::make('text', 'description',  "Description")->set_width(50),
        ]),

      Field::make('text', 'tcf_credit_card_features_title',  "tcf_credit_card_features_title")->set_width(50),
      Field::make('text', 'tcf_credit_card_features_description',  "tcf_credit_card_features_description")->set_width(50),

      Field::make('separator', 'tcf_separator_1', "Feature One"),
      Field::make('text', 'tcf_credit_card_feature_one_title',  "tcf_credit_card_feature_one_title")->set_width(25),
      Field::make('text', 'tcf_credit_card_feature_one_description',  "tcf_credit_card_feature_one_description")->set_width(25),
      Field::make('image', 'tcf_credit_card_feature_one_image',  "tcf_credit_card_feature_one_image")->set_value_type('url')->set_width(25),
      Field::make('complex', 'tcf_credit_card_feature_one_features', "tcf_credit_card_feature_one_features")
        ->add_fields([
          Field::make('text', 'description',  "Description"),
        ])->set_width(25),

      Field::make('separator', 'tcf_separator_2', "Feature Two"),
      Field::make('text', 'tcf_credit_card_feature_two_title',  "tcf_credit_card_feature_two_title")->set_width(25),
      Field::make('text', 'tcf_credit_card_feature_two_description',  "tcf_credit_card_feature_two_description")->set_width(25),
      Field::make('image', 'tcf_credit_card_feature_two_image',  "tcf_credit_card_feature_two_image")->set_value_type('url')->set_width(25),
      Field::make('complex', 'tcf_credit_card_feature_two_features', "tcf_credit_card_feature_two_features")
        ->add_fields([
          Field::make('text', 'description',  "Description"),
        ])->set_width(25),


      Field::make('separator', 'tcf_separator_3', "Feature Three"),
      Field::make('text', 'tcf_credit_card_feature_three_title',  "tcf_credit_card_feature_three_title")->set_width(25),
      Field::make('text', 'tcf_credit_card_feature_three_description',  "tcf_credit_card_feature_three_description")->set_width(25),
      Field::make('image', 'tcf_credit_card_feature_three_image',  "tcf_credit_card_feature_three_image")->set_value_type('url')->set_width(25),
      Field::make('complex', 'tcf_credit_card_feature_three_features', "tcf_credit_card_feature_three_features")
        ->add_fields([
          Field::make('text', 'description',  "Description"),
        ])->set_width(25),

      Field::make('separator', 'tcf_separator_4', "FAQ's"),
      Field::make('complex', 'tcf_post_faqs', "FAQ's")
        ->add_fields([
          Field::make('text', 'title',  "Title"),
          Field::make('text', 'description',  "Description"),
        ]),
    ]);
}

// Theme options
function a4a_attach_theme_options() {
  Container::make('theme_options', __('Theme Options'))
    ->add_fields([
      Field::make('separator', 'tcf_separator_1', "General information of single product"),
      Field::make('rich_text', 'why_tradelines', "Why Tradelines"),

      Field::make('separator', 'tcf_separator_2', "Companies"),
      Field::make('complex', 'tcf_companies', "Companies")
        ->add_fields([
          Field::make('image', 'company_image', "Company logo")
            ->set_value_type('url'),
        ]),

      Field::make('separator', 'tcf_separator_3', "Features"),
      Field::make('text', 'feature_one_title',  "feature_one_title")->set_width(33),
      Field::make('text', 'feature_one_description',  "feature_one_description")->set_width(33),
      Field::make('text', 'feature_one_link',  "feature_one_link")->set_width(33),

      Field::make('text', 'feature_two_title',  "feature_two_title")->set_width(33),
      Field::make('text', 'feature_two_description',  "feature_two_description")->set_width(33),
      Field::make('text', 'feature_two_link',  "feature_two_link")->set_width(33),

      Field::make('text', 'feature_three_title',  "feature_three_title")->set_width(33),
      Field::make('text', 'feature_three_description',  "feature_three_description")->set_width(33),
      Field::make('text', 'feature_three_link',  "feature_three_link")->set_width(33),

      Field::make('separator', 'tcf_separator_4', "Why Switch"),
      Field::make('text', 'switch_feature_one_title',  "feature_one_title")->set_width(33),
      Field::make('text', 'switch_feature_one_description',  "feature_one_description")->set_width(33),
      Field::make('text', 'switch_feature_one_link',  "feature_one_link")->set_width(33),

      Field::make('text', 'switch_feature_two_title',  "feature_two_title")->set_width(33),
      Field::make('text', 'switch_feature_two_description',  "feature_two_description")->set_width(33),
      Field::make('text', 'switch_feature_two_link',  "feature_two_link")->set_width(33),

      Field::make('text', 'switch_feature_three_title',  "feature_three_title")->set_width(33),
      Field::make('text', 'switch_feature_three_description',  "feature_three_description")->set_width(33),
      Field::make('text', 'switch_feature_three_link',  "feature_three_link")->set_width(33),

      Field::make('text', 'switch_feature_four_title',  "feature_four_title")->set_width(33),
      Field::make('text', 'switch_feature_four_description',  "feature_four_description")->set_width(33),
      Field::make('text', 'switch_feature_four_link',  "feature_four_link")->set_width(33),

      Field::make('separator', 'tcf_separator_5', "Testimonials"),
      Field::make('complex', 'tcf_testimonials', "Testimonials")
        ->add_fields([
          Field::make('image', 'testimonial_image', "Testimonial image")
            ->set_value_type('url')->set_width(25),

          Field::make('text', 'testimonial_name',  "testimonial_name")->set_width(25),
          Field::make('text', 'testimonial_subject',  "testimonial_subject")->set_width(25),
          Field::make('number', 'testimonial_stars',  "testimonial_stars")->set_width(25),
          Field::make('text', 'testimonial_description',  "testimonial_description"),

        ]),

      Field::make('separator', 'tcf_separator_6', "Trials Links"),
      Field::make('text', 'trial_learn_more_link',  "trial_learn_more_link"),
      Field::make('text', 'trial_get_started_link',  "trial_get_started_link"),
      Field::make('text', 'get_in_touch_link',  "get_in_touch_link"),

      Field::make('separator', 'tcf_separator_7', "FAQ's"),
      Field::make('complex', 'tcf_faqs', "FAQ's")
        ->add_fields([
          Field::make('text', 'title',  "Title"),
          Field::make('text', 'description',  "Description"),
        ]),

      Field::make('separator', 'tcf_separator_8', "Contact Us"),
      Field::make('text', 'contact_us_email',  "contact_us_email"),
      Field::make('text', 'contact_us_office',  "contact_us_office"),
      Field::make('text', 'contact_us_phone',  "contact_us_phone"),

      Field::make('separator', 'tcf_separator_9', "Case studies"),
      Field::make('complex', 'tcf_case_studies', "Case studies")
        ->add_fields([
          Field::make('image', 'image', "image")
            ->set_value_type('url')->set_width(20),

          Field::make('color', 'background_color',  "background_color")->set_width(20),
          Field::make('text', 'title',  "Title")->set_width(20),
          Field::make('text', 'description',  "Description")->set_width(20),
          Field::make('text', 'url',  "url")->set_width(20),
        ]),


      Field::make('separator', 'tcf_separator_10', "Team"),
      Field::make('complex', 'tcf_team', "Team")
        ->add_fields([
          Field::make('image', 'image', "image")
            ->set_value_type('url')->set_width(14),
          Field::make('text', 'title',  "Title")->set_width(14),
          Field::make('text', 'subject',  "subject")->set_width(14),
          Field::make('text', 'description',  "Description")->set_width(14),
          Field::make('text', 'url_twitter',  "url_twitter")->set_width(14),
          Field::make('text', 'url_linkedin',  "url_linkedin")->set_width(14),
          Field::make('text', 'url_dribbble',  "url_dribbble")->set_width(14),
        ]),

      Field::make('separator', 'tcf_separator_11', "Form IDs"),
      Field::make('text', 'get_started_form_id',  "get_started_form_id")->set_width(33),
      Field::make('text', 'newsletter_form_id',  "newsletter_form_id")->set_width(33),
      Field::make('text', 'contact_us_form_id',  "contact_us_form_id")->set_width(33),

      Field::make('separator', 'tcf_separator_12', "YouTube Video"),
      Field::make('textarea', 'youtube_video_iframe',  "youtube_video_iframe"),

      Field::make('separator', 'tcf_separator_13', "About Us"),
      Field::make('text', 'about_us_stats_one_title',  "about_us_stats_one_title")->set_width(50),
      Field::make('text', 'about_us_stats_one_value',  "about_us_stats_one_value")->set_width(50),

      Field::make('text', 'about_us_stats_two_title',  "about_us_stats_two_title")->set_width(50),
      Field::make('text', 'about_us_stats_two_value',  "about_us_stats_two_value")->set_width(50),

      Field::make('text', 'about_us_stats_three_title',  "about_us_stats_three_title")->set_width(50),
      Field::make('text', 'about_us_stats_three_value',  "about_us_stats_three_value")->set_width(50),

      Field::make('textarea', 'about_us_left_section',  "about_us_left_section")->set_width(50),
      Field::make('textarea', 'about_us_right_section',  "about_us_right_section")->set_width(50),

    ]);
}
