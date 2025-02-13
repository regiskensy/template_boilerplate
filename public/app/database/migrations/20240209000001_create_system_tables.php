<?php
use Phinx\Migration\AbstractMigration;

class CreateSystemTables extends AbstractMigration
{
    public function change()
    {
        // Create system_group
        $this->table('system_group', ['id' => false, 'primary_key' => ['id']])
            ->addColumn('id', 'integer')
            ->addColumn('name', 'string', ['limit' => 256])
            ->addIndex(['name'], ['name' => 'sys_group_name_idx'])
            ->create();

        // Create system_program
        $this->table('system_program', ['id' => false, 'primary_key' => ['id']])
            ->addColumn('id', 'integer')
            ->addColumn('name', 'string', ['limit' => 256])
            ->addColumn('controller', 'string', ['limit' => 256])
            ->addIndex(['name'], ['name' => 'sys_program_name_idx'])
            ->addIndex(['controller'], ['name' => 'sys_program_controller_idx'])
            ->create();

        // Create system_unit
        $this->table('system_unit', ['id' => false, 'primary_key' => ['id']])
            ->addColumn('id', 'integer')
            ->addColumn('name', 'string', ['limit' => 256])
            ->addColumn('connection_name', 'string', ['limit' => 256, 'null' => true])
            ->addColumn('custom_code', 'string', ['limit' => 256, 'null' => true])
            ->addIndex(['name'], ['name' => 'sys_unit_name_idx'])
            ->create();

        // Create system_role
        $this->table('system_role', ['id' => false, 'primary_key' => ['id']])
            ->addColumn('id', 'integer')
            ->addColumn('name', 'string', ['limit' => 256])
            ->addColumn('custom_code', 'string', ['limit' => 256, 'null' => true])
            ->addIndex(['name'], ['name' => 'sys_role_name_idx'])
            ->create();

        // Create system_preference
        $this->table('system_preference', ['id' => false, 'primary_key' => ['id']])
            ->addColumn('id', 'string', ['limit' => 256])
            ->addColumn('value', 'text')
            ->addIndex(['id'], ['name' => 'sys_preference_id_idx'])
            ->create();

        // Create system_users
        $this->table('system_users', ['id' => false, 'primary_key' => ['id']])
            ->addColumn('id', 'integer')
            ->addColumn('name', 'string', ['limit' => 256])
            ->addColumn('login', 'string', ['limit' => 256])
            ->addColumn('password', 'string', ['limit' => 256])
            ->addColumn('email', 'string', ['limit' => 256])
            ->addColumn('accepted_term_policy', 'string', ['limit' => 1])
            ->addColumn('phone', 'string', ['limit' => 256, 'null' => true])
            ->addColumn('address', 'string', ['limit' => 256, 'null' => true])
            ->addColumn('function_name', 'string', ['limit' => 256, 'null' => true])
            ->addColumn('about', 'text', ['null' => true])
            ->addColumn('accepted_term_policy_at', 'string', ['limit' => 20, 'null' => true])
            ->addColumn('accepted_term_policy_data', 'text', ['null' => true])
            ->addColumn('frontpage_id', 'integer', ['null' => true])
            ->addColumn('system_unit_id', 'integer', ['null' => true])
            ->addColumn('active', 'string', ['limit' => 1])
            ->addColumn('custom_code', 'string', ['limit' => 256, 'null' => true])
            ->addColumn('otp_secret', 'string', ['limit' => 256, 'null' => true])
            ->addForeignKey('frontpage_id', 'system_program', 'id')
            ->addForeignKey('system_unit_id', 'system_unit', 'id')
            ->addIndex(['name'], ['name' => 'sys_users_name_idx'])
            ->create();

        // Create system_user_unit
        $this->table('system_user_unit', ['id' => false, 'primary_key' => ['id']])
            ->addColumn('id', 'integer')
            ->addColumn('system_user_id', 'integer')
            ->addColumn('system_unit_id', 'integer')
            ->addForeignKey('system_user_id', 'system_users', 'id')
            ->addForeignKey('system_unit_id', 'system_unit', 'id')
            ->addIndex(['system_user_id'], ['name' => 'sys_user_unit_user_idx'])
            ->addIndex(['system_unit_id'], ['name' => 'sys_user_unit_unit_idx'])
            ->create();

        // Create system_user_group
        $this->table('system_user_group', ['id' => false, 'primary_key' => ['id']])
            ->addColumn('id', 'integer')
            ->addColumn('system_user_id', 'integer')
            ->addColumn('system_group_id', 'integer')
            ->addForeignKey('system_user_id', 'system_users', 'id')
            ->addForeignKey('system_group_id', 'system_group', 'id')
            ->addIndex(['system_group_id'], ['name' => 'sys_user_group_group_idx'])
            ->addIndex(['system_user_id'], ['name' => 'sys_user_group_user_idx'])
            ->create();

        // Create system_user_role
        $this->table('system_user_role', ['id' => false, 'primary_key' => ['id']])
            ->addColumn('id', 'integer')
            ->addColumn('system_user_id', 'integer')
            ->addColumn('system_role_id', 'integer')
            ->addForeignKey('system_user_id', 'system_users', 'id')
            ->addForeignKey('system_role_id', 'system_role', 'id')
            ->addIndex(['system_user_id'], ['name' => 'sys_user_role_user_idx'])
            ->addIndex(['system_role_id'], ['name' => 'sys_user_role_role_idx'])
            ->create();

        // Create system_group_program
        $this->table('system_group_program', ['id' => false, 'primary_key' => ['id']])
            ->addColumn('id', 'integer')
            ->addColumn('system_group_id', 'integer')
            ->addColumn('system_program_id', 'integer')
            ->addForeignKey('system_group_id', 'system_group', 'id')
            ->addForeignKey('system_program_id', 'system_program', 'id')
            ->addIndex(['system_group_id'], ['name' => 'sys_group_program_group_idx'])
            ->addIndex(['system_program_id'], ['name' => 'sys_group_program_program_idx'])
            ->create();

        // Create system_user_program
        $this->table('system_user_program', ['id' => false, 'primary_key' => ['id']])
            ->addColumn('id', 'integer')
            ->addColumn('system_user_id', 'integer')
            ->addColumn('system_program_id', 'integer')
            ->addForeignKey('system_user_id', 'system_users', 'id')
            ->addForeignKey('system_program_id', 'system_program', 'id')
            ->addIndex(['system_user_id'], ['name' => 'sys_user_program_user_idx'])
            ->addIndex(['system_program_id'], ['name' => 'sys_user_program_program_idx'])
            ->create();

        // Create system_user_old_password
        $this->table('system_user_old_password', ['id' => false, 'primary_key' => ['id']])
            ->addColumn('id', 'integer')
            ->addColumn('system_user_id', 'integer')
            ->addColumn('password', 'string', ['limit' => 256])
            ->addColumn('created_at', 'string', ['limit' => 20])
            ->addForeignKey('system_user_id', 'system_users', 'id')
            ->addIndex(['system_user_id'], ['name' => 'sys_user_old_password_user_idx'])
            ->create();

        // Create system_program_method_role
        $this->table('system_program_method_role', ['id' => false, 'primary_key' => ['id']])
            ->addColumn('id', 'integer')
            ->addColumn('system_program_id', 'integer')
            ->addColumn('system_role_id', 'integer')
            ->addColumn('method_name', 'string', ['limit' => 256])
            ->addForeignKey('system_program_id', 'system_program', 'id')
            ->addForeignKey('system_role_id', 'system_role', 'id')
            ->addIndex(['system_program_id'], ['name' => 'sys_program_method_role_program_idx'])
            ->addIndex(['system_role_id'], ['name' => 'sys_program_method_role_role_idx'])
            ->create();

        // Create system_change_log
        $this->table('system_change_log', ['id' => false, 'primary_key' => ['id']])
            ->addColumn('id', 'integer')
            ->addColumn('logdate', 'string', ['limit' => 20])
            ->addColumn('login', 'string', ['limit' => 256])
            ->addColumn('tablename', 'string', ['limit' => 256])
            ->addColumn('primarykey', 'string', ['limit' => 256])
            ->addColumn('pkvalue', 'string', ['limit' => 256])
            ->addColumn('operation', 'string', ['limit' => 256])
            ->addColumn('columnname', 'string', ['limit' => 256])
            ->addColumn('oldvalue', 'text')
            ->addColumn('newvalue', 'text')
            ->addColumn('access_ip', 'string', ['limit' => 256])
            ->addColumn('transaction_id', 'string', ['limit' => 256])
            ->addColumn('log_trace', 'text')
            ->addColumn('session_id', 'string', ['limit' => 256])
            ->addColumn('class_name', 'string', ['limit' => 256])
            ->addColumn('php_sapi', 'string', ['limit' => 256])
            ->addColumn('log_year', 'string', ['limit' => 4])
            ->addColumn('log_month', 'string', ['limit' => 2])
            ->addColumn('log_day', 'string', ['limit' => 2])
            ->addIndex(['login'], ['name' => 'sys_change_log_login_idx'])
            ->addIndex(['logdate'], ['name' => 'sys_change_log_date_idx'])
            ->addIndex(['log_year'], ['name' => 'sys_change_log_year_idx'])
            ->addIndex(['log_month'], ['name' => 'sys_change_log_month_idx'])
            ->addIndex(['log_day'], ['name' => 'sys_change_log_day_idx'])
            ->addIndex(['class_name'], ['name' => 'sys_change_log_class_idx'])
            ->addIndex(['tablename'], ['name' => 'sys_change_log_table_idx'])
            ->create();

        // Create system_sql_log
        $this->table('system_sql_log', ['id' => false, 'primary_key' => ['id']])
            ->addColumn('id', 'integer')
            ->addColumn('logdate', 'string', ['limit' => 20])
            ->addColumn('login', 'string', ['limit' => 256])
            ->addColumn('database_name', 'string', ['limit' => 256])
            ->addColumn('sql_command', 'text')
            ->addColumn('statement_type', 'string', ['limit' => 256])
            ->addColumn('access_ip', 'string', ['limit' => 45])
            ->addColumn('transaction_id', 'string', ['limit' => 256])
            ->addColumn('log_trace', 'text')
            ->addColumn('session_id', 'string', ['limit' => 256])
            ->addColumn('class_name', 'string', ['limit' => 256])
            ->addColumn('php_sapi', 'string', ['limit' => 256])
            ->addColumn('request_id', 'string', ['limit' => 256])
            ->addColumn('log_year', 'string', ['limit' => 4])
            ->addColumn('log_month', 'string', ['limit' => 2])
            ->addColumn('log_day', 'string', ['limit' => 2])
            ->addIndex(['login'], ['name' => 'sys_sql_log_login_idx'])
            ->addIndex(['logdate'], ['name' => 'sys_sql_log_date_idx'])
            ->addIndex(['database_name'], ['name' => 'sys_sql_log_database_idx'])
            ->addIndex(['class_name'], ['name' => 'sys_sql_log_class_idx'])
            ->addIndex(['log_year'], ['name' => 'sys_sql_log_year_idx'])
            ->addIndex(['log_month'], ['name' => 'sys_sql_log_month_idx'])
            ->addIndex(['log_day'], ['name' => 'sys_sql_log_day_idx'])
            ->create();

        // Create system_access_log
        $this->table('system_access_log', ['id' => false, 'primary_key' => ['id']])
            ->addColumn('id', 'integer')
            ->addColumn('sessionid', 'string', ['limit' => 256])
            ->addColumn('login', 'string', ['limit' => 256])
            ->addColumn('login_time', 'string', ['limit' => 20])
            ->addColumn('login_year', 'string', ['limit' => 4])
            ->addColumn('login_month', 'string', ['limit' => 2])
            ->addColumn('login_day', 'string', ['limit' => 2])
            ->addColumn('logout_time', 'string', ['limit' => 20])
            ->addColumn('impersonated', 'string', ['limit' => 1])
            ->addColumn('access_ip', 'string', ['limit' => 45])
            ->addColumn('impersonated_by', 'string', ['limit' => 200])
            ->addIndex(['login'], ['name' => 'sys_access_log_login_idx'])
            ->addIndex(['login_year'], ['name' => 'sys_access_log_year_idx'])
            ->addIndex(['login_month'], ['name' => 'sys_access_log_month_idx'])
            ->addIndex(['login_day'], ['name' => 'sys_access_log_day_idx'])
            ->create();

        // Create system_request_log
        $this->table('system_request_log', ['id' => false, 'primary_key' => ['id']])
            ->addColumn('id', 'integer')
            ->addColumn('endpoint', 'text')
            ->addColumn('logdate', 'string', ['limit' => 256])
            ->addColumn('log_year', 'string', ['limit' => 4])
            ->addColumn('log_month', 'string', ['limit' => 2])
            ->addColumn('log_day', 'string', ['limit' => 2])
            ->addColumn('session_id', 'string', ['limit' => 256])
            ->addColumn('login', 'string', ['limit' => 256])
            ->addColumn('access_ip', 'string', ['limit' => 256])
            ->addColumn('class_name', 'string', ['limit' => 256])
            ->addColumn('class_method', 'string', ['limit' => 256])
            ->addColumn('http_host', 'string', ['limit' => 256])
            ->addColumn('server_port', 'string', ['limit' => 256])
            ->addColumn('request_uri', 'text')
            ->addColumn('request_method', 'string', ['limit' => 256])
            ->addColumn('query_string', 'text')
            ->addColumn('request_headers', 'text')
            ->addColumn('request_body', 'text')
            ->addColumn('request_duration', 'integer')
            ->addIndex(['login'], ['name' => 'sys_request_log_login_idx'])
            ->addIndex(['logdate'], ['name' => 'sys_request_log_date_idx'])
            ->addIndex(['log_year'], ['name' => 'sys_request_log_year_idx'])
            ->addIndex(['log_month'], ['name' => 'sys_request_log_month_idx'])
            ->addIndex(['log_day'], ['name' => 'sys_request_log_day_idx'])
            ->addIndex(['class_name'], ['name' => 'sys_request_log_class_idx'])
            ->addIndex(['class_method'], ['name' => 'sys_request_log_method_idx'])
            ->create();

        // Create system_access_notification_log
        $this->table('system_access_notification_log', ['id' => false, 'primary_key' => ['id']])
            ->addColumn('id', 'integer')
            ->addColumn('login', 'string', ['limit' => 256])
            ->addColumn('email', 'string', ['limit' => 256])
            ->addColumn('ip_address', 'string', ['limit' => 256])
            ->addColumn('login_time', 'string', ['limit' => 256])
            ->addIndex(['login'], ['name' => 'sys_access_notification_log_login_idx'])
            ->create();

        // Create system_schedule_log
        $this->table('system_schedule_log', ['id' => false, 'primary_key' => ['id']])
            ->addColumn('id', 'integer')
            ->addColumn('logdate', 'string', ['limit' => 19])
            ->addColumn('title', 'string', ['limit' => 256])
            ->addColumn('class_name', 'string', ['limit' => 256])
            ->addColumn('method', 'string', ['limit' => 256])
            ->addColumn('status', 'string', ['limit' => 1])
            ->addColumn('message', 'text')
            ->addIndex(['class_name'], ['name' => 'sys_schedule_log_class_idx'])
            ->addIndex(['method'], ['name' => 'sys_schedule_log_method_idx'])
            ->create();

        // Create system_notification
        $this->table('system_notification', ['id' => false, 'primary_key' => ['id']])
            ->addColumn('id', 'integer')
            ->addColumn('system_user_id', 'integer')
            ->addColumn('system_user_to_id', 'integer')
            ->addColumn('subject', 'string', ['limit' => 256])
            ->addColumn('message', 'text')
            ->addColumn('dt_message', 'string', ['limit' => 20])
            ->addColumn('action_url', 'text')
            ->addColumn('action_label', 'string', ['limit' => 256])
            ->addColumn('icon', 'string', ['limit' => 100])
            ->addColumn('checked', 'string', ['limit' => 1])
            ->addIndex(['system_user_id'], ['name' => 'sys_notification_user_id_idx'])
            ->addIndex(['system_user_to_id'], ['name' => 'sys_notification_user_to_idx'])
            ->create();

        // Create system_message
        $this->table('system_message', ['id' => false, 'primary_key' => ['id']])
            ->addColumn('id', 'integer')
            ->addColumn('system_user_id', 'integer')
            ->addColumn('system_user_to_id', 'integer')
            ->addColumn('subject', 'string', ['limit' => 256])
            ->addColumn('message', 'text')
            ->addColumn('dt_message', 'string', ['limit' => 20])
            ->addColumn('checked', 'string', ['limit' => 1])
            ->addColumn('removed', 'string', ['limit' => 1])
            ->addColumn('viewed', 'string', ['limit' => 1])
            ->addColumn('attachments', 'text')
            ->addIndex(['system_user_id'], ['name' => 'sys_message_user_id_idx'])
            ->addIndex(['system_user_to_id'], ['name' => 'sys_message_user_to_idx'])
            ->create();

        // Create system_message_tag
        $this->table('system_message_tag', ['id' => false, 'primary_key' => ['id']])
            ->addColumn('id', 'integer')
            ->addColumn('system_message_id', 'integer')
            ->addColumn('tag', 'string', ['limit' => 256])
            ->addForeignKey('system_message_id', 'system_message', 'id')
            ->addIndex(['system_message_id'], ['name' => 'sys_message_tag_msg_idx'])
            ->create();

        // Create system_folder
        $this->table('system_folder', ['id' => false, 'primary_key' => ['id']])
            ->addColumn('id', 'integer')
            ->addColumn('system_user_id', 'integer')
            ->addColumn('created_at', 'string', ['limit' => 20])
            ->addColumn('name', 'string', ['limit' => 256])
            ->addColumn('in_trash', 'string', ['limit' => 1])
            ->addColumn('system_folder_parent_id', 'integer', ['null' => true])
            ->addForeignKey('system_folder_parent_id', 'system_folder', 'id')
            ->addIndex(['system_user_id'], ['name' => 'sys_folder_user_id_idx'])
            ->addIndex(['name'], ['name' => 'sys_folder_name_idx'])
            ->addIndex(['system_folder_parent_id'], ['name' => 'sys_folder_parend_id_idx'])
            ->create();

        // Create system_folder_user
        $this->table('system_folder_user', ['id' => false, 'primary_key' => ['id']])
            ->addColumn('id', 'integer')
            ->addColumn('system_folder_id', 'integer')
            ->addColumn('system_user_id', 'integer')
            ->addForeignKey('system_folder_id', 'system_folder', 'id')
            ->addIndex(['system_folder_id'], ['name' => 'sys_folder_user_folder_idx'])
            ->addIndex(['system_user_id'], ['name' => 'sys_folder_user_user_idx'])
            ->create();

        // Create system_folder_group
        $this->table('system_folder_group', ['id' => false, 'primary_key' => ['id']])
            ->addColumn('id', 'integer')
            ->addColumn('system_folder_id', 'integer')
            ->addColumn('system_group_id', 'integer')
            ->addForeignKey('system_folder_id', 'system_folder', 'id')
            ->addIndex(['system_folder_id'], ['name' => 'sys_folder_group_folder_idx'])
            ->addIndex(['system_group_id'], ['name' => 'sys_folder_group_group_idx'])
            ->create();

        // Create system_document
        $this->table('system_document', ['id' => false, 'primary_key' => ['id']])
            ->addColumn('id', 'integer')
            ->addColumn('system_user_id', 'integer')
            ->addColumn('title', 'string', ['limit' => 256])
            ->addColumn('description', 'text')
            ->addColumn('submission_date', 'date')
            ->addColumn('archive_date', 'date')
            ->addColumn('filename', 'string', ['limit' => 512])
            ->addColumn('in_trash', 'string', ['limit' => 1])
            ->addColumn('system_folder_id', 'integer', ['null' => true])
            ->addColumn('content', 'text')
            ->addColumn('content_type', 'string', ['limit' => 100])
            ->addForeignKey('system_folder_id', 'system_folder', 'id')
            ->addIndex(['system_user_id'], ['name' => 'sys_document_user_idx'])
            ->addIndex(['system_folder_id'], ['name' => 'sys_document_folder_idx'])
            ->create();

        // Create system_document_user
        $this->table('system_document_user', ['id' => false, 'primary_key' => ['id']])
            ->addColumn('id', 'integer')
            ->addColumn('document_id', 'integer')
            ->addColumn('system_user_id', 'integer')
            ->addForeignKey('document_id', 'system_document', 'id')
            ->addIndex(['document_id'], ['name' => 'sys_document_user_document_idx'])
            ->addIndex(['system_user_id'], ['name' => 'sys_document_user_user_idx'])
            ->create();

        // Create system_document_group
        $this->table('system_document_group', ['id' => false, 'primary_key' => ['id']])
            ->addColumn('id', 'integer')
            ->addColumn('document_id', 'integer')
            ->addColumn('system_group_id', 'integer')
            ->addForeignKey('document_id', 'system_document', 'id')
            ->addIndex(['document_id'], ['name' => 'sys_document_group_document_idx'])
            ->addIndex(['system_group_id'], ['name' => 'sys_document_group_group_idx'])
            ->create();

        // Create system_document_bookmark
        $this->table('system_document_bookmark', ['id' => false, 'primary_key' => ['id']])
            ->addColumn('id', 'integer')
            ->addColumn('system_user_id', 'integer')
            ->addColumn('system_document_id', 'integer')
            ->addForeignKey('system_document_id', 'system_document', 'id')
            ->addIndex(['system_user_id'], ['name' => 'sys_document_bookmark_user_idx'])
            ->addIndex(['system_document_id'], ['name' => 'sys_document_bookmark_document_idx'])
            ->create();

        // Create system_folder_bookmark
        $this->table('system_folder_bookmark', ['id' => false, 'primary_key' => ['id']])
            ->addColumn('id', 'integer')
            ->addColumn('system_user_id', 'integer')
            ->addColumn('system_folder_id', 'integer')
            ->addForeignKey('system_folder_id', 'system_folder', 'id')
            ->addIndex(['system_user_id'], ['name' => 'sys_folder_bookmark_user_idx'])
            ->addIndex(['system_folder_id'], ['name' => 'sys_folder_bookmark_folder_idx'])
            ->create();

        // Create system_post
        $this->table('system_post', ['id' => false, 'primary_key' => ['id']])
            ->addColumn('id', 'integer')
            ->addColumn('system_user_id', 'integer')
            ->addColumn('title', 'string', ['limit' => 256])
            ->addColumn('content', 'text')
            ->addColumn('created_at', 'string', ['limit' => 20])
            ->addColumn('updated_at', 'string', ['limit' => 20])
            ->addColumn('updated_by', 'integer')
            ->addColumn('active', 'string', ['limit' => 1, 'default' => 'Y'])
            ->addIndex(['system_user_id'], ['name' => 'sys_post_user_idx'])
            ->create();

        // Create system_post_share_group
        $this->table('system_post_share_group', ['id' => false, 'primary_key' => ['id']])
            ->addColumn('id', 'integer')
            ->addColumn('system_group_id', 'integer')
            ->addColumn('system_post_id', 'integer')
            ->addForeignKey('system_post_id', 'system_post', 'id')
            ->addIndex(['system_group_id'], ['name' => 'sys_post_share_group_group_idx'])
            ->addIndex(['system_post_id'], ['name' => 'sys_post_share_group_post_idx'])
            ->create();

        // Create system_post_tag
        $this->table('system_post_tag', ['id' => false, 'primary_key' => ['id']])
            ->addColumn('id', 'integer')
            ->addColumn('system_post_id', 'integer')
            ->addColumn('tag', 'string', ['limit' => 256])
            ->addForeignKey('system_post_id', 'system_post', 'id')
            ->addIndex(['system_post_id'], ['name' => 'sys_post_tag_post_idx'])
            ->create();

        // Create system_post_comment
        $this->table('system_post_comment', ['id' => false, 'primary_key' => ['id']])
            ->addColumn('id', 'integer')
            ->addColumn('comment', 'text')
            ->addColumn('system_user_id', 'integer')
            ->addColumn('system_post_id', 'integer')
            ->addColumn('created_at', 'string', ['limit' => 20])
            ->addForeignKey('system_post_id', 'system_post', 'id')
            ->addIndex(['system_user_id'], ['name' => 'sys_post_comment_user_idx'])
            ->addIndex(['system_post_id'], ['name' => 'sys_post_comment_post_idx'])
            ->create();

        // Create system_post_like
        $this->table('system_post_like', ['id' => false, 'primary_key' => ['id']])
            ->addColumn('id', 'integer')
            ->addColumn('system_user_id', 'integer')
            ->addColumn('system_post_id', 'integer')
            ->addColumn('created_at', 'string', ['limit' => 20])
            ->addForeignKey('system_post_id', 'system_post', 'id')
            ->addIndex(['system_user_id'], ['name' => 'sys_post_like_user_idx'])
            ->addIndex(['system_post_id'], ['name' => 'sys_post_like_post_idx'])
            ->create();

        // Create system_wiki_page
        $this->table('system_wiki_page', ['id' => false, 'primary_key' => ['id']])
            ->addColumn('id', 'integer')
            ->addColumn('system_user_id', 'integer')
            ->addColumn('created_at', 'string', ['limit' => 20])
            ->addColumn('updated_at', 'string', ['limit' => 20])
            ->addColumn('title', 'string', ['limit' => 256])
            ->addColumn('description', 'string', ['limit' => 256])
            ->addColumn('content', 'text')
            ->addColumn('active', 'string', ['limit' => 1, 'default' => 'Y'])
            ->addColumn('searchable', 'string', ['limit' => 1, 'default' => 'Y'])
            ->addColumn('updated_by', 'integer')
            ->addIndex(['system_user_id'], ['name' => 'sys_wiki_page_user_idx'])
            ->create();

        // Create system_wiki_tag
        $this->table('system_wiki_tag', ['id' => false, 'primary_key' => ['id']])
            ->addColumn('id', 'integer')
            ->addColumn('system_wiki_page_id', 'integer')
            ->addColumn('tag', 'string', ['limit' => 256])
            ->addForeignKey('system_wiki_page_id', 'system_wiki_page', 'id')
            ->addIndex(['system_wiki_page_id'], ['name' => 'sys_wiki_tag_page_idx'])
            ->create();

        // Create system_wiki_share_group
        $this->table('system_wiki_share_group', ['id' => false, 'primary_key' => ['id']])
            ->addColumn('id', 'integer')
            ->addColumn('system_group_id', 'integer')
            ->addColumn('system_wiki_page_id', 'integer')
            ->addForeignKey('system_wiki_page_id', 'system_wiki_page', 'id')
            ->addIndex(['system_group_id'], ['name' => 'sys_wiki_share_group_group_idx'])
            ->addIndex(['system_wiki_page_id'], ['name' => 'sys_wiki_share_group_page_idx'])
            ->create();
    }
} 