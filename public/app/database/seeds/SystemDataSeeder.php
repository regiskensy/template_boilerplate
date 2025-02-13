<?php

declare(strict_types=1);

use Phinx\Seed\AbstractSeed;

class SystemDataSeeder extends AbstractSeed
{
    public function run(): void
    {
        echo "Iniciando SystemDataSeeder...\n";

        // SystemGroupSeeder
        $groups = [
            ['id' => 1, 'name' => 'Template - Admin'],
            ['id' => 2, 'name' => 'Template - Users'],
            ['id' => 3, 'name' => 'Application programs']
        ];
        $this->table('system_group')->insert($groups)->save();

        // SystemProgramSeeder
        $programs = [
            // Administração do Sistema
            ['id' => 1, 'name' => 'System Administration Dashboard', 'controller' => 'SystemAdministrationDashboard'],
            ['id' => 2, 'name' => 'Programs', 'controller' => 'SystemProgramForm'],
            ['id' => 3, 'name' => 'Programs List', 'controller' => 'SystemProgramList'],
            ['id' => 4, 'name' => 'Groups', 'controller' => 'SystemGroupForm'],
            ['id' => 5, 'name' => 'Groups List', 'controller' => 'SystemGroupList'],
            ['id' => 6, 'name' => 'Units', 'controller' => 'SystemUnitForm'],
            ['id' => 7, 'name' => 'Units List', 'controller' => 'SystemUnitList'],
            ['id' => 8, 'name' => 'Roles', 'controller' => 'SystemRoleForm'],
            ['id' => 9, 'name' => 'Roles List', 'controller' => 'SystemRoleList'],
            ['id' => 10, 'name' => 'Users', 'controller' => 'SystemUserForm'],
            ['id' => 11, 'name' => 'Users List', 'controller' => 'SystemUserList'],
            ['id' => 12, 'name' => 'System Preferences', 'controller' => 'SystemPreferenceForm'],

            // Logs e Monitoramento
            ['id' => 13, 'name' => 'System Log Dashboard', 'controller' => 'SystemLogDashboard'],
            ['id' => 14, 'name' => 'Access Log', 'controller' => 'SystemAccessLogList'],
            ['id' => 15, 'name' => 'Change Log', 'controller' => 'SystemChangeLogView'],
            ['id' => 16, 'name' => 'SQL Log', 'controller' => 'SystemSqlLogList'],
            ['id' => 17, 'name' => 'Request Log', 'controller' => 'SystemRequestLogList'],
            ['id' => 18, 'name' => 'Request Log View', 'controller' => 'SystemRequestLogView'],
            ['id' => 19, 'name' => 'PHP Error Log', 'controller' => 'SystemPHPErrorLogView'],
            ['id' => 20, 'name' => 'Session Variables', 'controller' => 'SystemSessionVarsView'],

            // Ferramentas de Sistema
            ['id' => 21, 'name' => 'Database Explorer', 'controller' => 'SystemDatabaseExplorer'],
            ['id' => 22, 'name' => 'Table List', 'controller' => 'SystemTableList'],
            ['id' => 23, 'name' => 'Data Browser', 'controller' => 'SystemDataBrowser'],
            ['id' => 24, 'name' => 'SQL Panel', 'controller' => 'SystemSQLPanel'],
            ['id' => 25, 'name' => 'Modules Check', 'controller' => 'SystemModulesCheckView'],
            ['id' => 26, 'name' => 'Files Diff', 'controller' => 'SystemFilesDiff'],
            ['id' => 27, 'name' => 'System Information', 'controller' => 'SystemInformationView'],
            ['id' => 28, 'name' => 'PHP Info', 'controller' => 'SystemPHPInfoView'],

            // Wiki e Posts
            ['id' => 29, 'name' => 'Wiki List', 'controller' => 'SystemWikiList'],
            ['id' => 30, 'name' => 'Wiki Form', 'controller' => 'SystemWikiForm'],
            ['id' => 31, 'name' => 'Wiki Page Picker', 'controller' => 'SystemWikiPagePicker'],
            ['id' => 32, 'name' => 'Posts List', 'controller' => 'SystemPostList'],
            ['id' => 33, 'name' => 'Post Form', 'controller' => 'SystemPostForm'],

            // Agendamento
            ['id' => 34, 'name' => 'Schedule List', 'controller' => 'SystemScheduleList'],
            ['id' => 35, 'name' => 'Schedule Form', 'controller' => 'SystemScheduleForm'],
            ['id' => 36, 'name' => 'Schedule Log List', 'controller' => 'SystemScheduleLogList'],

            // Páginas Básicas
            ['id' => 37, 'name' => 'Common Page', 'controller' => 'CommonPage'],
            ['id' => 38, 'name' => 'Welcome', 'controller' => 'WelcomeView'],
            ['id' => 39, 'name' => 'Welcome Dashboard', 'controller' => 'WelcomeDashboardView'],

            // Perfil e Notificações
            ['id' => 40, 'name' => 'Profile View', 'controller' => 'SystemProfileView'],
            ['id' => 41, 'name' => 'Profile', 'controller' => 'SystemProfileForm'],
            ['id' => 42, 'name' => 'Notifications List', 'controller' => 'SystemNotificationList'],
            ['id' => 43, 'name' => 'Notification View', 'controller' => 'SystemNotificationFormView'],
            ['id' => 44, 'name' => 'Support Form', 'controller' => 'SystemSupportForm'],
            ['id' => 45, 'name' => '2FA Configuration', 'controller' => 'SystemProfile2FAForm'],

            // Mensagens e Documentos
            ['id' => 46, 'name' => 'Message Form', 'controller' => 'SystemMessageForm'],
            ['id' => 47, 'name' => 'Message List', 'controller' => 'SystemMessageList'],
            ['id' => 48, 'name' => 'Message View', 'controller' => 'SystemMessageFormView'],
            ['id' => 49, 'name' => 'Drive List', 'controller' => 'SystemDriveList'],
            ['id' => 50, 'name' => 'Folder Form', 'controller' => 'SystemFolderForm'],
            ['id' => 51, 'name' => 'Folder Share', 'controller' => 'SystemFolderShareForm'],
            ['id' => 52, 'name' => 'Document Share', 'controller' => 'SystemDocumentShareForm'],
            ['id' => 53, 'name' => 'Document Form', 'controller' => 'SystemDocumentFormWindow'],
            ['id' => 54, 'name' => 'Folder View', 'controller' => 'SystemFolderFormView'],
            ['id' => 55, 'name' => 'Document Upload', 'controller' => 'SystemDriveDocumentUploadForm'],

            // Wiki e Posts (Users)
            ['id' => 56, 'name' => 'Post Feed', 'controller' => 'SystemPostFeedView'],
            ['id' => 57, 'name' => 'Post Comment Form', 'controller' => 'SystemPostCommentForm'],
            ['id' => 58, 'name' => 'Post Comments', 'controller' => 'SystemPostCommentList'],
            ['id' => 59, 'name' => 'Wiki Search', 'controller' => 'SystemWikiSearchList'],
            ['id' => 60, 'name' => 'Wiki View', 'controller' => 'SystemWikiView'],

            // Outros
            ['id' => 61, 'name' => 'Message Tag Form', 'controller' => 'SystemMessageTagForm'],
            ['id' => 62, 'name' => 'Contacts List', 'controller' => 'SystemContactsList'],
            ['id' => 63, 'name' => 'Text Editor', 'controller' => 'SystemTextDocumentEditor'],
            ['id' => 64, 'name' => 'Create Document', 'controller' => 'SystemDriveDocumentCreateForm']
        ];
        $this->table('system_program')->insert($programs)->save();

        // SystemUnitSeeder
        $units = [
            // Unidades do sistema
            ['id' => 1, 'name' => 'Unit A', 'connection_name' => 'unit_a', 'custom_code' => null],
            ['id' => 2, 'name' => 'Unit B', 'connection_name' => 'unit_b', 'custom_code' => null]
        ];
        $this->table('system_unit')->insert($units)->save();

        // SystemRoleSeeder
        $roles = [
            // Papéis do sistema
            ['id' => 1, 'name' => 'Administrator', 'custom_code' => null],
            ['id' => 2, 'name' => 'Standard User', 'custom_code' => null]
        ];
        $this->table('system_role')->insert($roles)->save();

        // SystemUserSeeder
        $users = [
            [
                'id' => 1, 'name' => 'Administrator', 'login' => 'admin',
                'password' => '$2y$10$xuR3XEc3J6tpv7myC9gPj.Ab5GacSeHSZoYUTYtOg.cEc22G.iBwa', // senha: admin
                'email' => 'admin@admin.net', 'accepted_term_policy' => 'Y',
                'phone' => '+123 456 789', 'address' => 'Admin Street, 123',
                'function_name' => 'Administrator', 'about' => 'I\'m the administrator',
                'accepted_term_policy_at' => date('Y-m-d H:i:s'),
                'accepted_term_policy_data' => 'Accepted terms and conditions',
                'frontpage_id' => 38, // WelcomeView
                'system_unit_id' => 1,
                'active' => 'Y',
                'custom_code' => null,
                'otp_secret' => null
            ],
            [
                'id' => 2, 'name' => 'User', 'login' => 'user',
                'password' => '$2y$10$MUYN29LOSHrCSGhrzvYG8O/PtAjbWvCubaUSTJGhVTJhm69WNFJs.', // senha: user
                'email' => 'user@user.net', 'accepted_term_policy' => 'Y',
                'phone' => '+123 456 789', 'address' => 'User Street, 123',
                'function_name' => 'End user', 'about' => 'I\'m the end user',
                'accepted_term_policy_at' => date('Y-m-d H:i:s'),
                'accepted_term_policy_data' => 'Accepted terms and conditions',
                'frontpage_id' => 38, // WelcomeView
                'system_unit_id' => 1,
                'active' => 'Y',
                'custom_code' => null,
                'otp_secret' => null
            ]
        ];
        $this->table('system_users')->insert($users)->save();

        // SystemUserUnitSeeder
        $userUnits = [
            // Associações usuário-unidade
            ['id' => 1, 'system_user_id' => 1, 'system_unit_id' => 1], // admin -> Unit A
            ['id' => 2, 'system_user_id' => 1, 'system_unit_id' => 2], // admin -> Unit B
            ['id' => 3, 'system_user_id' => 2, 'system_unit_id' => 1], // user -> Unit A
            ['id' => 4, 'system_user_id' => 2, 'system_unit_id' => 2]  // user -> Unit B
        ];
        $this->table('system_user_unit')->insert($userUnits)->save();

        // SystemUserGroupSeeder
        $userGroups = [
            ['id' => 1, 'system_user_id' => 1, 'system_group_id' => 1], // admin -> Admin
            ['id' => 2, 'system_user_id' => 1, 'system_group_id' => 2], // admin -> Users
            ['id' => 3, 'system_user_id' => 1, 'system_group_id' => 3], // admin -> Programs
            ['id' => 4, 'system_user_id' => 2, 'system_group_id' => 2]  // user -> Users
        ];
        $this->table('system_user_group')->insert($userGroups)->save();

        // SystemGroupProgramSeeder
        $groupPrograms = [
            // Programas do grupo Admin (group_id = 1)
            // Administração do Sistema
            ['id' => 1, 'system_group_id' => 1, 'system_program_id' => 1],  // SystemAdministrationDashboard
            ['id' => 2, 'system_group_id' => 1, 'system_program_id' => 2],  // SystemProgramForm
            ['id' => 3, 'system_group_id' => 1, 'system_program_id' => 3],  // SystemProgramList
            ['id' => 4, 'system_group_id' => 1, 'system_program_id' => 4],  // SystemGroupForm
            ['id' => 5, 'system_group_id' => 1, 'system_program_id' => 5],  // SystemGroupList
            ['id' => 6, 'system_group_id' => 1, 'system_program_id' => 6],  // SystemUnitForm
            ['id' => 7, 'system_group_id' => 1, 'system_program_id' => 7],  // SystemUnitList
            ['id' => 8, 'system_group_id' => 1, 'system_program_id' => 8],  // SystemRoleForm
            ['id' => 9, 'system_group_id' => 1, 'system_program_id' => 9],  // SystemRoleList
            ['id' => 10, 'system_group_id' => 1, 'system_program_id' => 10], // SystemUserForm
            ['id' => 11, 'system_group_id' => 1, 'system_program_id' => 11], // SystemUserList
            ['id' => 12, 'system_group_id' => 1, 'system_program_id' => 12], // SystemPreferenceForm

            // Logs e Monitoramento
            ['id' => 13, 'system_group_id' => 1, 'system_program_id' => 13], // SystemLogDashboard
            ['id' => 14, 'system_group_id' => 1, 'system_program_id' => 14], // SystemAccessLogList
            ['id' => 15, 'system_group_id' => 1, 'system_program_id' => 15], // SystemChangeLogView
            ['id' => 16, 'system_group_id' => 1, 'system_program_id' => 16], // SystemSqlLogList
            ['id' => 17, 'system_group_id' => 1, 'system_program_id' => 17], // SystemRequestLogList
            ['id' => 18, 'system_group_id' => 1, 'system_program_id' => 18], // SystemRequestLogView
            ['id' => 19, 'system_group_id' => 1, 'system_program_id' => 19], // SystemPHPErrorLogView
            ['id' => 20, 'system_group_id' => 1, 'system_program_id' => 20], // SystemSessionVarsView

            // Ferramentas de Sistema
            ['id' => 21, 'system_group_id' => 1, 'system_program_id' => 21], // SystemDatabaseExplorer
            ['id' => 22, 'system_group_id' => 1, 'system_program_id' => 22], // SystemTableList
            ['id' => 23, 'system_group_id' => 1, 'system_program_id' => 23], // SystemDataBrowser
            ['id' => 24, 'system_group_id' => 1, 'system_program_id' => 24], // SystemSQLPanel
            ['id' => 25, 'system_group_id' => 1, 'system_program_id' => 25], // SystemModulesCheckView
            ['id' => 26, 'system_group_id' => 1, 'system_program_id' => 26], // SystemFilesDiff
            ['id' => 27, 'system_group_id' => 1, 'system_program_id' => 27], // SystemInformationView
            ['id' => 28, 'system_group_id' => 1, 'system_program_id' => 28], // SystemPHPInfoView

            // Wiki e Posts (Admin)
            ['id' => 29, 'system_group_id' => 1, 'system_program_id' => 29], // SystemWikiList
            ['id' => 30, 'system_group_id' => 1, 'system_program_id' => 30], // SystemWikiForm
            ['id' => 31, 'system_group_id' => 1, 'system_program_id' => 31], // SystemWikiPagePicker
            ['id' => 32, 'system_group_id' => 1, 'system_program_id' => 32], // SystemPostList
            ['id' => 33, 'system_group_id' => 1, 'system_program_id' => 33], // SystemPostForm

            // Agendamento (Admin)
            ['id' => 34, 'system_group_id' => 1, 'system_program_id' => 34], // SystemScheduleList
            ['id' => 35, 'system_group_id' => 1, 'system_program_id' => 35], // SystemScheduleForm
            ['id' => 36, 'system_group_id' => 1, 'system_program_id' => 36], // SystemScheduleLogList

            // Programas do grupo Users (group_id = 2)
            // Páginas Básicas
            ['id' => 37, 'system_group_id' => 2, 'system_program_id' => 37], // CommonPage
            ['id' => 38, 'system_group_id' => 2, 'system_program_id' => 38], // WelcomeView
            ['id' => 39, 'system_group_id' => 2, 'system_program_id' => 39], // WelcomeDashboardView

            // Perfil e Notificações
            ['id' => 40, 'system_group_id' => 2, 'system_program_id' => 40], // SystemProfileView
            ['id' => 41, 'system_group_id' => 2, 'system_program_id' => 41], // SystemProfileForm
            ['id' => 42, 'system_group_id' => 2, 'system_program_id' => 42], // SystemNotificationList
            ['id' => 43, 'system_group_id' => 2, 'system_program_id' => 43], // SystemNotificationFormView
            ['id' => 44, 'system_group_id' => 2, 'system_program_id' => 44], // SystemSupportForm
            ['id' => 45, 'system_group_id' => 2, 'system_program_id' => 45], // SystemProfile2FAForm

            // Mensagens e Documentos
            ['id' => 46, 'system_group_id' => 2, 'system_program_id' => 46], // SystemMessageForm
            ['id' => 47, 'system_group_id' => 2, 'system_program_id' => 47], // SystemMessageList
            ['id' => 48, 'system_group_id' => 2, 'system_program_id' => 48], // SystemMessageFormView
            ['id' => 49, 'system_group_id' => 2, 'system_program_id' => 49], // SystemDriveList
            ['id' => 50, 'system_group_id' => 2, 'system_program_id' => 50], // SystemFolderForm
            ['id' => 51, 'system_group_id' => 2, 'system_program_id' => 51], // SystemFolderShareForm
            ['id' => 52, 'system_group_id' => 2, 'system_program_id' => 52], // SystemDocumentShareForm
            ['id' => 53, 'system_group_id' => 2, 'system_program_id' => 53], // SystemDocumentFormWindow
            ['id' => 54, 'system_group_id' => 2, 'system_program_id' => 54], // SystemFolderFormView
            ['id' => 55, 'system_group_id' => 2, 'system_program_id' => 55], // SystemDriveDocumentUploadForm

            // Wiki e Posts (Users)
            ['id' => 56, 'system_group_id' => 2, 'system_program_id' => 56], // SystemPostFeedView
            ['id' => 57, 'system_group_id' => 2, 'system_program_id' => 57], // SystemPostCommentForm
            ['id' => 58, 'system_group_id' => 2, 'system_program_id' => 58], // SystemPostCommentList
            ['id' => 59, 'system_group_id' => 2, 'system_program_id' => 59], // SystemWikiSearchList
            ['id' => 60, 'system_group_id' => 2, 'system_program_id' => 60], // SystemWikiView

            // Outros
            ['id' => 61, 'system_group_id' => 2, 'system_program_id' => 61], // SystemMessageTagForm
            ['id' => 62, 'system_group_id' => 2, 'system_program_id' => 62], // SystemContactsList
            ['id' => 63, 'system_group_id' => 2, 'system_program_id' => 63], // SystemTextDocumentEditor
            ['id' => 64, 'system_group_id' => 2, 'system_program_id' => 64]  // SystemDriveDocumentCreateForm
        ];
        $this->table('system_group_program')->insert($groupPrograms)->save();

        // SystemUserRoleSeeder
        $userRoles = [
            // Associações usuário-papel
            ['id' => 1, 'system_user_id' => 1, 'system_role_id' => 1], // admin -> Administrator
            ['id' => 2, 'system_user_id' => 1, 'system_role_id' => 2], // admin -> Standard User
            ['id' => 3, 'system_user_id' => 2, 'system_role_id' => 2]  // user -> Standard User
        ];
        $this->table('system_user_role')->insert($userRoles)->save();

        // SystemProgramMethodRoleSeeder
        $methodRoles = [
            // Role A (Admin) methods
            ['id' => 1, 'system_program_id' => 1, 'system_role_id' => 1, 'method_name' => 'onEdit'],     // SystemAdministrationDashboard
            ['id' => 2, 'system_program_id' => 2, 'system_role_id' => 1, 'method_name' => 'onSave'],     // SystemProgramForm
            ['id' => 3, 'system_program_id' => 10, 'system_role_id' => 1, 'method_name' => 'onSave'],    // SystemUserForm
            ['id' => 4, 'system_program_id' => 10, 'system_role_id' => 1, 'method_name' => 'onEdit'],    // SystemUserForm
            ['id' => 5, 'system_program_id' => 11, 'system_role_id' => 1, 'method_name' => 'onDelete'],  // SystemUserList
            
            // Role B (User) methods
            ['id' => 6, 'system_program_id' => 41, 'system_role_id' => 2, 'method_name' => 'onSave'],    // SystemProfileForm
            ['id' => 7, 'system_program_id' => 41, 'system_role_id' => 2, 'method_name' => 'onEdit']     // SystemProfileForm
        ];
        $this->table('system_program_method_role')->insert($methodRoles)->save();

        // SystemPostSeeder
        $posts = [
            [
                'id' => 1,
                'system_user_id' => 1,
                'title' => 'Primeira noticia',
                'content' => '<p style="text-align: justify; "><span style="font-family: &quot;Source Sans Pro&quot;; font-size: 18px;">﻿</span><span style="font-family: &quot;Source Sans Pro&quot;; font-size: 18px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Id cursus metus aliquam eleifend mi in nulla posuere sollicitudin. Tincidunt nunc pulvinar sapien et ligula ullamcorper. Odio pellentesque diam volutpat commodo sed egestas egestas. Eget egestas purus viverra accumsan in nisl nisi scelerisque. Habitant morbi tristique senectus et netus et malesuada. Vitae ultricies leo integer malesuada nunc vel risus commodo viverra. Vehicula ipsum a arcu cursus. Rhoncus est pellentesque elit ullamcorper dignissim. Faucibus in ornare quam viverra orci sagittis eu. Nisi scelerisque eu ultrices vitae auctor. Tellus cras adipiscing enim eu turpis egestas. Eget lorem dolor sed viverra ipsum nunc aliquet. Neque convallis a cras semper auctor neque. Bibendum ut tristique et egestas. Amet nisl suscipit adipiscing bibendum.</span></p><p style="text-align: justify;"><span style="font-family: &quot;Source Sans Pro&quot;; font-size: 18px;">Mattis nunc sed blandit libero volutpat sed cras ornare. Leo duis ut diam quam nulla. Tempus imperdiet nulla malesuada pellentesque elit eget gravida cum sociis. Non quam lacus suspendisse faucibus. Enim nulla aliquet porttitor lacus luctus accumsan tortor posuere ac. Dignissim enim sit amet venenatis urna. Elit sed vulputate mi sit. Sit amet nisl suscipit adipiscing bibendum est. Maecenas accumsan lacus vel facilisis. Orci phasellus egestas tellus rutrum tellus pellentesque eu tincidunt tortor. Aenean pharetra magna ac placerat vestibulum lectus mauris ultrices eros. Augue lacus viverra vitae congue eu consequat ac felis. Bibendum neque egestas congue quisque egestas diam. Facilisis magna etiam tempor orci eu lobortis elementum. Rhoncus est pellentesque elit ullamcorper dignissim cras tincidunt lobortis. Pellentesque adipiscing commodo elit at imperdiet dui accumsan sit amet. Nullam eget felis eget nunc. Nec ullamcorper sit amet risus nullam eget felis. Lacus vel facilisis volutpat est velit egestas dui id.</span></p>',
                'created_at' => '2022-11-03 14:59:39',
                'active' => 'Y'
            ],
            [
                'id' => 2,
                'system_user_id' => 1,
                'title' => 'Segunda noticia',
                'content' => '<p style="text-align: justify; "><span style="font-size: 18px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ac orci phasellus egestas tellus rutrum. Pretium nibh ipsum consequat nisl vel pretium lectus quam. Faucibus scelerisque eleifend donec pretium vulputate sapien. Mattis molestie a iaculis at erat pellentesque adipiscing commodo elit. Ultricies mi quis hendrerit dolor magna eget. Quam id leo in vitae turpis massa sed elementum tempus. Eget arcu dictum varius duis at consectetur lorem. Quis varius quam quisque id diam. Consequat interdum varius sit amet mattis vulputate. Purus non enim praesent elementum facilisis leo vel fringilla. Nulla facilisi nullam vehicula ipsum a arcu. Habitant morbi tristique senectus et netus et malesuada fames. Risus commodo viverra maecenas accumsan lacus. Mattis molestie a iaculis at erat pellentesque adipiscing commodo elit. Imperdiet proin fermentum leo vel orci porta non pulvinar neque. Massa massa ultricies mi quis hendrerit. Vel turpis nunc eget lorem dolor sed viverra ipsum nunc. Quisque egestas diam in arcu cursus euismod quis.</span></p><p style="text-align: justify; "><span style="font-size: 18px;">Posuere morbi leo urna molestie at elementum eu facilisis. Dolor morbi non arcu risus quis varius quam. Fermentum posuere urna nec tincidunt praesent semper feugiat nibh. Consectetur adipiscing elit ut aliquam purus sit. Gravida cum sociis natoque penatibus et magnis. Sollicitudin aliquam ultrices sagittis orci. Tortor consequat id porta nibh venenatis cras sed felis. Dictumst quisque sagittis purus sit amet volutpat consequat mauris nunc. Arcu dictum varius duis at consectetur. Mauris commodo quis imperdiet massa tincidunt nunc pulvinar. At tellus at urna condimentum mattis pellentesque. Tellus mauris a diam maecenas sed.</span></p>',
                'created_at' => '2022-11-03 15:03:31',
                'active' => 'Y'
            ]
        ];
        $this->table('system_post')->insert($posts)->save();

        // SystemPostShareGroupSeeder
        $postShareGroups = [
            ['id' => 1, 'system_group_id' => 1, 'system_post_id' => 1],
            ['id' => 2, 'system_group_id' => 2, 'system_post_id' => 1],
            ['id' => 3, 'system_group_id' => 1, 'system_post_id' => 2],
            ['id' => 4, 'system_group_id' => 2, 'system_post_id' => 2]
        ];
        $this->table('system_post_share_group')->insert($postShareGroups)->save();

        // SystemPostTagSeeder
        $postTags = [
            ['id' => 1, 'system_post_id' => 1, 'tag' => 'novidades'],
            ['id' => 2, 'system_post_id' => 2, 'tag' => 'novidades']
        ];
        $this->table('system_post_tag')->insert($postTags)->save();

        // SystemPostCommentSeeder
        $postComments = [
            ['id' => 1, 'comment' => 'My first comment', 'system_user_id' => 1, 'system_post_id' => 2, 'created_at' => '2022-11-03 15:22:11'],
            ['id' => 2, 'comment' => 'Another comment', 'system_user_id' => 1, 'system_post_id' => 2, 'created_at' => '2022-11-03 15:22:17'],
            ['id' => 3, 'comment' => 'The best comment', 'system_user_id' => 2, 'system_post_id' => 2, 'created_at' => '2022-11-03 15:23:11']
        ];
        $this->table('system_post_comment')->insert($postComments)->save();

        // SystemWikiPageSeeder
        $wikiPages = [
            [
                'id' => 1,
                'system_user_id' => 1,
                'created_at' => '2022-11-02 15:33:58',
                'updated_at' => '2022-11-02 15:35:10',
                'title' => 'Manual de operacoes',
                'description' => 'Este manual explica os procedimentos basicos de operacao',
                'content' => '<p style="text-align: justify; "><span style="font-size: 18px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sapien nec sagittis aliquam malesuada bibendum arcu vitae. Quisque egestas diam in arcu cursus euismod quis. Risus nec feugiat in fermentum posuere urna nec tincidunt praesent. At imperdiet dui accumsan sit amet. Est pellentesque elit ullamcorper dignissim cras tincidunt lobortis. Elementum facilisis leo vel fringilla est ullamcorper. Id porta nibh venenatis cras. Viverra orci sagittis eu volutpat odio facilisis mauris sit. Senectus et netus et malesuada fames ac turpis. Sociis natoque penatibus et magnis dis parturient montes. Vel turpis nunc eget lorem dolor sed viverra ipsum nunc. Sed viverra tellus in hac habitasse. Tellus id interdum velit laoreet id donec ultrices tincidunt arcu. Pharetra et ultrices neque ornare aenean euismod elementum. Volutpat blandit aliquam etiam erat velit scelerisque in. Neque aliquam vestibulum morbi blandit cursus risus. Id consectetur purus ut faucibus pulvinar elementum.</span></p><p style="text-align: justify; "><br></p>',
                'active' => 'Y',
                'searchable' => 'Y'
            ],
            [
                'id' => 2,
                'system_user_id' => 1,
                'created_at' => '2022-11-02 15:35:04',
                'updated_at' => '2022-11-02 15:37:49',
                'title' => 'Instrucoes de lancamento',
                'description' => 'Este manual explica as instrucoes de lancamento de produto',
                'content' => '<p><span style="font-size: 18px;">Non curabitur gravida arcu ac tortor dignissim convallis. Nunc scelerisque viverra mauris in aliquam sem fringilla ut morbi. Nunc eget lorem dolor sed viverra. Et odio pellentesque diam volutpat commodo sed egestas. Enim lobortis scelerisque fermentum dui faucibus in ornare quam viverra. Faucibus et molestie ac feugiat. Erat velit scelerisque in dictum non consectetur a erat nam. Quis risus sed vulputate odio ut enim blandit volutpat. Pharetra vel turpis nunc eget lorem dolor sed viverra. Nisl tincidunt eget nullam non nisi est sit. Orci phasellus egestas tellus rutrum tellus pellentesque eu. Et tortor at risus viverra adipiscing at in tellus integer. Risus ultricies tristique nulla aliquet enim. Ac felis donec et odio pellentesque diam volutpat commodo sed. Ut morbi tincidunt augue interdum. Morbi tempus iaculis urna id volutpat.</span></p><p><a href="index.php?class=SystemWikiView&amp;method=onLoad&amp;key=3" generator="adianti">Sub pagina de instrucoes 1</a></p><p><a href="index.php?class=SystemWikiView&amp;method=onLoad&amp;key=4" generator="adianti">Sub pagina de instrucoes 2</a><br><span style="font-size: 18px;"><br></span><br></p>',
                'active' => 'Y',
                'searchable' => 'Y'
            ],
            [
                'id' => 3,
                'system_user_id' => 1,
                'created_at' => '2022-11-02 15:36:59',
                'updated_at' => '2022-11-02 15:37:21',
                'title' => 'Instrucoes - sub pagina 1',
                'description' => 'Instrucoes - sub pagina 1',
                'content' => '<p><span style="font-size: 18px;">Follow these steps:</span></p><ol><li><span style="font-size: 18px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</span></li><li><span style="font-size: 18px;">Sapien nec sagittis aliquam malesuada bibendum arcu vitae.</span></li><li><span style="font-size: 18px;">Quisque egestas diam in arcu cursus euismod quis.</span><br></li></ol>',
                'active' => 'Y',
                'searchable' => 'N'
            ],
            [
                'id' => 4,
                'system_user_id' => 1,
                'created_at' => '2022-11-02 15:37:17',
                'updated_at' => '2022-11-02 15:37:22',
                'title' => 'Instrucoes - sub pagina 2',
                'description' => 'Instrucoes - sub pagina 2',
                'content' => '<p><span style="font-size: 18px;">Follow these steps:</span></p><ol><li><span style="font-size: 18px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</span></li><li><span style="font-size: 18px;">Sapien nec sagittis aliquam malesuada bibendum arcu vitae.</span></li><li><span style="font-size: 18px;">Quisque egestas diam in arcu cursus euismod quis.</span></li></ol>',
                'active' => 'Y',
                'searchable' => 'N'
            ]
        ];
        $this->table('system_wiki_page')->insert($wikiPages)->save();

        // SystemWikiTagSeeder
        $wikiTags = [
            ['id' => 3, 'system_wiki_page_id' => 1, 'tag' => 'manual'],
            ['id' => 5, 'system_wiki_page_id' => 4, 'tag' => 'manual'],
            ['id' => 6, 'system_wiki_page_id' => 3, 'tag' => 'manual'],
            ['id' => 7, 'system_wiki_page_id' => 2, 'tag' => 'manual']
        ];
        $this->table('system_wiki_tag')->insert($wikiTags)->save();

        // SystemWikiShareGroupSeeder
        $wikiShareGroups = [
            ['id' => 1, 'system_group_id' => 1, 'system_wiki_page_id' => 1],
            ['id' => 2, 'system_group_id' => 2, 'system_wiki_page_id' => 1],
            ['id' => 3, 'system_group_id' => 1, 'system_wiki_page_id' => 2],
            ['id' => 4, 'system_group_id' => 2, 'system_wiki_page_id' => 2],
            ['id' => 5, 'system_group_id' => 1, 'system_wiki_page_id' => 3],
            ['id' => 6, 'system_group_id' => 2, 'system_wiki_page_id' => 3],
            ['id' => 7, 'system_group_id' => 1, 'system_wiki_page_id' => 4],
            ['id' => 8, 'system_group_id' => 2, 'system_wiki_page_id' => 4]
        ];
        $this->table('system_wiki_share_group')->insert($wikiShareGroups)->save();
    }
}
