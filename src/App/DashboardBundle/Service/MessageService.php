<?php

namespace App\DashboardBundle\Service;

/**
 * Class MessageService
 */
class MessageService
{
    // Process
    const APP_ERROR                     = 'Sorry, something goes wrong. Please try again';
    // Process
    const PROCESS_PCNTL_NOT_FOUND       = 'This command needs the pcntl extension to run.';
    const PROCESS_PHP_NOT_FOUND         = 'Unable to find PHP binary to start queue process.';
    const PROCESS_CHILD_NOT_FOUND       = 'Unable to set the child process as session leader';
    const PROCESS_QUEUE_UNABLE_TO_START = 'Unable to start the queue process.';
    const PROCESS_QUEUE_STARTED         = 'Queue process started.';
    const PROCESS_QUEUE_RUNNING         = 'A queue process is already running.';
    const PROCESS_QUEUE_NOT_RUNNING     = 'No queue process running.';
    const PROCESS_QUEUE_STOPPED         = 'Stopped the queue process.';
    // CryptFS
    const PASSPHRASE_NOT_FOUND          = 'Passphrase not found.';
    const PASSPHRASE_REALOD             = 'In order to apply software and security configurations, please run <code>vagrant reload</code> command in console.';
    const PASSPHRASE_NOT_MATCH          = 'Provided passphrases doesn\'t match.';
    const CRYPTFS_UNABLE_TO_MOUNT       = 'Unable to mount encrypted folders. Please double check provided passphrase.';
    const CRYPTFS_PLEASE_WAIT           = 'Prepare encrypted folders. It takes around <b>10-20</b> seconds. Please be patient, you will be redirected to ECMRS admin UI dashboard automatically.';
    // Service
    const SERVICE_NOT_FOUND             = 'Service not found.';
    const SERVICE_RESTARTED             = '\'%s\' service has been restarted.';
    // Logs
    const LOGS_NOT_FOUND                = 'No logs found.';
    const LOGS_VIEW                     = 'You can watch the execution progress on the <a href="/admin/logs">logs page</a>.';
    // Core
    const CORE_ADD                      = 'ECMRS core will be created in about %d minutes.';
    const CORE_FIRST_TIME_ADD           = 'For first time ECMRS core will be created in about %d minutes.';
    const CORE_ADD_FAIL                 = 'Sorry, you can\'t create \'%s\' environment from Admin UI.';
    // Share
    const REQUEST_SUCCESS               = 'Request successfully send.';
    const SHARE_SUCCESS                 = 'SAMBA will be installed in 10 seconds.';
    // Host
    const HOST_ADD_FAIL                 = 'Sorry, you can\'t create \'%s\' host.';
    const HOST_ADD                      = 'Host successfully created.';
    const HOST_EXIST                    = 'Host %s already exist.';
    // Sync
    const SYNC_SOURCE_NOT_SOUND         = 'Synchronization source not found.';
    const SYNC_ADD                      = 'Synchronization started.';
    // Restore
    const RESTORE_SOURCE_NOT_SOUND      = 'Restore source not found.';
    // Security
    const PASSWORD_NOT_FOUND            = 'Password not found.';
    const PASSWORD_NOT_MATCH            = 'Provided password doesn\'t match.';
    const PASSWORD_INVALID              = 'Wrong password provided.';
}
