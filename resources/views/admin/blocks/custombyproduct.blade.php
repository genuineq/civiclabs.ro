@formField('browser', [
    'routePrefix' => 'solutions',
    'moduleName'  => 'byproducts',
    'name'        => 'custombyproduct',
    'label'       => 'Byproduct',
    'max'         => 1,
])

@formField('input', [
    'name'       => 'title',
    'type'       => 'text',
    'label'      => 'Byproduct Title',
    'translated' => true,
    'maxlength'  => 100,
])

@formField('select', [
    'name'       => 'width',
    'label'      => 'Byproduct width',
    'default'    => 'full',
    'unpack'     => true,
    'options'    => [
        [
            'value' => 'quarter',
            'label' => '25%',
        ],
        [
            'value' => 'half',
            'label' => '50%',
        ],
        [
            'value' => 'third',
            'label' => '75%',
        ],
        [
            'value' => 'full',
            'label' => '100%',
        ],
    ],
])

<div style="margin-top: 15px !important;">
    Icon <a href="https://material.io/resources/icons/?style=baseline"  target="_blank">(see all icons here)</a>
</div>

@formField('select', [
    'name' => 'icon',
    'label' => '',
    'placeholder' => 'Add title icon',
    'options' => [
        [ 'value' => "", 'label' => 'no icon' ],
        [ 'value' => "3d_rotation", 'label' => '3d_rotation' ],
        [ 'value' => "accessibility", 'label' => 'accessibility' ],
        [ 'value' => "accessible", 'label' => 'accessible' ],
        [ 'value' => "account_balance", 'label' => 'account_balance' ],
        [ 'value' => "account_balance_wallet", 'label' => 'account_balance_wallet' ],
        [ 'value' => "account_box", 'label' => 'account_box' ],
        [ 'value' => "account_circle", 'label' => 'account_circle' ],
        [ 'value' => "add_shopping_cart", 'label' => 'add_shopping_cart' ],
        [ 'value' => "alarm_add", 'label' => 'alarm_add' ],
        [ 'value' => "alarm", 'label' => 'alarm' ],
        [ 'value' => "alarm_off", 'label' => 'alarm_off' ],
        [ 'value' => "alarm_on", 'label' => 'alarm_on' ],
        [ 'value' => "all_out", 'label' => 'all_out' ],
        [ 'value' => "android", 'label' => 'android' ],
        [ 'value' => "announcement", 'label' => 'announcement' ],
        [ 'value' => "aspect_ratio", 'label' => 'aspect_ratio' ],
        [ 'value' => "assessment", 'label' => 'assessment' ],
        [ 'value' => "assignment", 'label' => 'assignment' ],
        [ 'value' => "assignment_ind", 'label' => 'assignment_ind' ],
        [ 'value' => "assignment_late", 'label' => 'assignment_late' ],
        [ 'value' => "assignment_return", 'label' => 'assignment_return' ],
        [ 'value' => "assignment_returned", 'label' => 'assignment_returned' ],
        [ 'value' => "assignment_turned_in", 'label' => 'assignment_turned_in' ],
        [ 'value' => "autorenew", 'label' => 'autorenew' ],
        [ 'value' => "backup", 'label' => 'backup' ],
        [ 'value' => "book", 'label' => 'book' ],
        [ 'value' => "bookmark", 'label' => 'bookmark' ],
        [ 'value' => "bookmark_border", 'label' => 'bookmark_border' ],
        [ 'value' => "bug_report", 'label' => 'bug_report' ],
        [ 'value' => "build", 'label' => 'build' ],
        [ 'value' => "cached", 'label' => 'cached' ],
        [ 'value' => "camera_enhance", 'label' => 'camera_enhance' ],
        [ 'value' => "card_giftcard", 'label' => 'card_giftcard' ],
        [ 'value' => "card_membership", 'label' => 'card_membership' ],
        [ 'value' => "card_travel", 'label' => 'card_travel' ],
        [ 'value' => "change_history", 'label' => 'change_history' ],
        [ 'value' => "check_circle", 'label' => 'check_circle' ],
        [ 'value' => "chrome_reader_mode", 'label' => 'chrome_reader_mode' ],
        [ 'value' => "class", 'label' => 'class' ],
        [ 'value' => "code", 'label' => 'code' ],
        [ 'value' => "compare_arrows", 'label' => 'compare_arrows' ],
        [ 'value' => "copyright", 'label' => 'copyright' ],
        [ 'value' => "credit_card", 'label' => 'credit_card' ],
        [ 'value' => "dashboard", 'label' => 'dashboard' ],
        [ 'value' => "date_range", 'label' => 'date_range' ],
        [ 'value' => "delete", 'label' => 'delete' ],
        [ 'value' => "delete_forever", 'label' => 'delete_forever' ],
        [ 'value' => "description", 'label' => 'description' ],
        [ 'value' => "dns", 'label' => 'dns' ],
        [ 'value' => "done_all", 'label' => 'done_all' ],
        [ 'value' => "done", 'label' => 'done' ],
        [ 'value' => "donut_large", 'label' => 'donut_large' ],
        [ 'value' => "donut_small", 'label' => 'donut_small' ],
        [ 'value' => "eject", 'label' => 'eject' ],
        [ 'value' => "euro_symbol", 'label' => 'euro_symbol' ],
        [ 'value' => "event", 'label' => 'event' ],
        [ 'value' => "event_seat", 'label' => 'event_seat' ],
        [ 'value' => "exit_to_app", 'label' => 'exit_to_app' ],
        [ 'value' => "explore", 'label' => 'explore' ],
        [ 'value' => "extension", 'label' => 'extension' ],
        [ 'value' => "face", 'label' => 'face' ],
        [ 'value' => "favorite", 'label' => 'favorite' ],
        [ 'value' => "favorite_border", 'label' => 'favorite_border' ],
        [ 'value' => "feedback", 'label' => 'feedback' ],
        [ 'value' => "find_in_page", 'label' => 'find_in_page' ],
        [ 'value' => "find_replace", 'label' => 'find_replace' ],
        [ 'value' => "fingerprint", 'label' => 'fingerprint' ],
        [ 'value' => "flight_land", 'label' => 'flight_land' ],
        [ 'value' => "flight_takeoff", 'label' => 'flight_takeoff' ],
        [ 'value' => "flip_to_back", 'label' => 'flip_to_back' ],
        [ 'value' => "flip_to_front", 'label' => 'flip_to_front' ],
        [ 'value' => "g_translate", 'label' => 'g_translate' ],
        [ 'value' => "gavel", 'label' => 'gavel' ],
        [ 'value' => "get_app", 'label' => 'get_app' ],
        [ 'value' => "gif", 'label' => 'gif' ],
        [ 'value' => "grade", 'label' => 'grade' ],
        [ 'value' => "group_work", 'label' => 'group_work' ],
        [ 'value' => "help", 'label' => 'help' ],
        [ 'value' => "help_outline", 'label' => 'help_outline' ],
        [ 'value' => "highlight_off", 'label' => 'highlight_off' ],
        [ 'value' => "history", 'label' => 'history' ],
        [ 'value' => "home", 'label' => 'home' ],
        [ 'value' => "hourglass_empty", 'label' => 'hourglass_empty' ],
        [ 'value' => "hourglass_full", 'label' => 'hourglass_full' ],
        [ 'value' => "http", 'label' => 'http' ],
        [ 'value' => "https", 'label' => 'https' ],
        [ 'value' => "important_devices", 'label' => 'important_devices' ],
        [ 'value' => "info", 'label' => 'info' ],
        [ 'value' => "info_outline", 'label' => 'info_outline' ],
        [ 'value' => "input", 'label' => 'input' ],
        [ 'value' => "invert_colors", 'label' => 'invert_colors' ],
        [ 'value' => "label", 'label' => 'label' ],
        [ 'value' => "label_outline", 'label' => 'label_outline' ],
        [ 'value' => "language", 'label' => 'language' ],
        [ 'value' => "launch", 'label' => 'launch' ],
        [ 'value' => "lightbulb_outline", 'label' => 'lightbulb_outline' ],
        [ 'value' => "line_style", 'label' => 'line_style' ],
        [ 'value' => "line_weight", 'label' => 'line_weight' ],
        [ 'value' => "list", 'label' => 'list' ],
        [ 'value' => "lock", 'label' => 'lock' ],
        [ 'value' => "lock_open", 'label' => 'lock_open' ],
        [ 'value' => "lock_outline", 'label' => 'lock_outline' ],
        [ 'value' => "loyalty", 'label' => 'loyalty' ],
        [ 'value' => "markunread_mailbox", 'label' => 'markunread_mailbox' ],
        [ 'value' => "motorcycle", 'label' => 'motorcycle' ],
        [ 'value' => "note_add", 'label' => 'note_add' ],
        [ 'value' => "offline_pin", 'label' => 'offline_pin' ],
        [ 'value' => "opacity", 'label' => 'opacity' ],
        [ 'value' => "open_in_browser", 'label' => 'open_in_browser' ],
        [ 'value' => "open_in_new", 'label' => 'open_in_new' ],
        [ 'value' => "open_with", 'label' => 'open_with' ],
        [ 'value' => "pageview", 'label' => 'pageview' ],
        [ 'value' => "pan_tool", 'label' => 'pan_tool' ],
        [ 'value' => "payment", 'label' => 'payment' ],
        [ 'value' => "perm_camera_mic", 'label' => 'perm_camera_mic' ],
        [ 'value' => "perm_contact_calendar", 'label' => 'perm_contact_calendar' ],
        [ 'value' => "perm_data_setting", 'label' => 'perm_data_setting' ],
        [ 'value' => "perm_device_information", 'label' => 'perm_device_information' ],
        [ 'value' => "perm_identity", 'label' => 'perm_identity' ],
        [ 'value' => "perm_media", 'label' => 'perm_media' ],
        [ 'value' => "perm_phone_msg", 'label' => 'perm_phone_msg' ],
        [ 'value' => "perm_scan_wifi", 'label' => 'perm_scan_wifi' ],
        [ 'value' => "pets", 'label' => 'pets' ],
        [ 'value' => "picture_in_picture_alt", 'label' => 'picture_in_picture_alt' ],
        [ 'value' => "picture_in_picture", 'label' => 'picture_in_picture' ],
        [ 'value' => "play_for_work", 'label' => 'play_for_work' ],
        [ 'value' => "polymer", 'label' => 'polymer' ],
        [ 'value' => "power_settings_new", 'label' => 'power_settings_new' ],
        [ 'value' => "pregnant_woman", 'label' => 'pregnant_woman' ],
        [ 'value' => "print", 'label' => 'print' ],
        [ 'value' => "query_builder", 'label' => 'query_builder' ],
        [ 'value' => "question_answer", 'label' => 'question_answer' ],
        [ 'value' => "receipt", 'label' => 'receipt' ],
        [ 'value' => "record_voice_over", 'label' => 'record_voice_over' ],
        [ 'value' => "redeem", 'label' => 'redeem' ],
        [ 'value' => "remove_shopping_cart", 'label' => 'remove_shopping_cart' ],
        [ 'value' => "reorder", 'label' => 'reorder' ],
        [ 'value' => "report_problem", 'label' => 'report_problem' ],
        [ 'value' => "restore", 'label' => 'restore' ],
        [ 'value' => "restore_page", 'label' => 'restore_page' ],
        [ 'value' => "room", 'label' => 'room' ],
        [ 'value' => "rounded_corner", 'label' => 'rounded_corner' ],
        [ 'value' => "rowing", 'label' => 'rowing' ],
        [ 'value' => "schedule", 'label' => 'schedule' ],
        [ 'value' => "search", 'label' => 'search' ],
        [ 'value' => "settings_applications", 'label' => 'settings_applications' ],
        [ 'value' => "settings_backup_restore", 'label' => 'settings_backup_restore' ],
        [ 'value' => "settings", 'label' => 'settings' ],
        [ 'value' => "settings_bluetooth", 'label' => 'settings_bluetooth' ],
        [ 'value' => "settings_brightness", 'label' => 'settings_brightness' ],
        [ 'value' => "settings_cell", 'label' => 'settings_cell' ],
        [ 'value' => "settings_ethernet", 'label' => 'settings_ethernet' ],
        [ 'value' => "settings_input_antenna", 'label' => 'settings_input_antenna' ],
        [ 'value' => "settings_input_component", 'label' => 'settings_input_component' ],
        [ 'value' => "settings_input_composite", 'label' => 'settings_input_composite' ],
        [ 'value' => "settings_input_hdmi", 'label' => 'settings_input_hdmi' ],
        [ 'value' => "settings_input_svideo", 'label' => 'settings_input_svideo' ],
        [ 'value' => "settings_overscan", 'label' => 'settings_overscan' ],
        [ 'value' => "settings_phone", 'label' => 'settings_phone' ],
        [ 'value' => "settings_power", 'label' => 'settings_power' ],
        [ 'value' => "settings_remote", 'label' => 'settings_remote' ],
        [ 'value' => "settings_voice", 'label' => 'settings_voice' ],
        [ 'value' => "shop", 'label' => 'shop' ],
        [ 'value' => "shop_two", 'label' => 'shop_two' ],
        [ 'value' => "shopping_basket", 'label' => 'shopping_basket' ],
        [ 'value' => "shopping_cart", 'label' => 'shopping_cart' ],
        [ 'value' => "speaker_notes", 'label' => 'speaker_notes' ],
        [ 'value' => "speaker_notes_off", 'label' => 'speaker_notes_off' ],
        [ 'value' => "spellcheck", 'label' => 'spellcheck' ],
        [ 'value' => "star_rate", 'label' => 'star_rate' ],
        [ 'value' => "stars", 'label' => 'stars' ],
        [ 'value' => "store", 'label' => 'store' ],
        [ 'value' => "subject", 'label' => 'subject' ],
        [ 'value' => "supervisor_account", 'label' => 'supervisor_account' ],
        [ 'value' => "swap_horiz", 'label' => 'swap_horiz' ],
        [ 'value' => "swap_vert", 'label' => 'swap_vert' ],
        [ 'value' => "swap_vertical_circle", 'label' => 'swap_vertical_circle' ],
        [ 'value' => "system_update_alt", 'label' => 'system_update_alt' ],
        [ 'value' => "tab", 'label' => 'tab' ],
        [ 'value' => "tab_unselected", 'label' => 'tab_unselected' ],
        [ 'value' => "theaters", 'label' => 'theaters' ],
        [ 'value' => "thumb_down", 'label' => 'thumb_down' ],
        [ 'value' => "thumb_up", 'label' => 'thumb_up' ],
        [ 'value' => "thumbs_up_down", 'label' => 'thumbs_up_down' ],
        [ 'value' => "timeline", 'label' => 'timeline' ],
        [ 'value' => "toc", 'label' => 'toc' ],
        [ 'value' => "today", 'label' => 'today' ],
        [ 'value' => "toll", 'label' => 'toll' ],
        [ 'value' => "touch_app", 'label' => 'touch_app' ],
        [ 'value' => "track_changes", 'label' => 'track_changes' ],
        [ 'value' => "translate", 'label' => 'translate' ],
        [ 'value' => "trending_down", 'label' => 'trending_down' ],
        [ 'value' => "trending_flat", 'label' => 'trending_flat' ],
        [ 'value' => "trending_up", 'label' => 'trending_up' ],
        [ 'value' => "turned_in", 'label' => 'turned_in' ],
        [ 'value' => "turned_in_not", 'label' => 'turned_in_not' ],
        [ 'value' => "update", 'label' => 'update' ],
        [ 'value' => "verified_user", 'label' => 'verified_user' ],
        [ 'value' => "view_agenda", 'label' => 'view_agenda' ],
        [ 'value' => "view_array", 'label' => 'view_array' ],
        [ 'value' => "view_carousel", 'label' => 'view_carousel' ],
        [ 'value' => "view_column", 'label' => 'view_column' ],
        [ 'value' => "view_day", 'label' => 'view_day' ],
        [ 'value' => "view_headline", 'label' => 'view_headline' ],
        [ 'value' => "view_list", 'label' => 'view_list' ],
        [ 'value' => "view_module", 'label' => 'view_module' ],
        [ 'value' => "view_quilt", 'label' => 'view_quilt' ],
        [ 'value' => "view_stream", 'label' => 'view_stream' ],
        [ 'value' => "view_week", 'label' => 'view_week' ],
        [ 'value' => "visibility", 'label' => 'visibility' ],
        [ 'value' => "visibility_off", 'label' => 'visibility_off' ],
        [ 'value' => "watch_later", 'label' => 'watch_later' ],
        [ 'value' => "work", 'label' => 'work' ],
        [ 'value' => "youtube_searched_for", 'label' => 'youtube_searched_for' ],
        [ 'value' => "zoom_in", 'label' => 'zoom_in' ],
        [ 'value' => "zoom_out", 'label' => 'zoom_out' ]
    ]
])

@formField('color', [
    'name'  => 'background_color',
    'label' => 'Title background color',
])

@formField('color', [
    'name'  => 'text_color',
    'label' => 'Title text color',
])