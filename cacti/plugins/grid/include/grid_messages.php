<?php
// $Id$
/*
 +-------------------------------------------------------------------------+
 | Copyright IBM Corp. 2006, 2022                                          |
 |                                                                         |
 | Licensed under the Apache License, Version 2.0 (the "License");         |
 | you may not use this file except in compliance with the License.        |
 | You may obtain a copy of the License at                                 |
 |                                                                         |
 | http://www.apache.org/licenses/LICENSE-2.0                              |
 |                                                                         |
 | Unless required by applicable law or agreed to in writing, software     |
 | distributed under the License is distributed on an "AS IS" BASIS,       |
 | WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.|
 | See the License for the specific language governing permissions and     |
 | limitations under the License.                                          |
 +-------------------------------------------------------------------------+
*/

$grid_lsf_host_type = array(
	'!'          => 'Auto Detect',
	'CRAYJ'      => 'CRAYJ',
	'CRAYC'      => 'CRAYC',
	'CRAYT'      => 'CRAYT',
	'CRAYSV1'    => 'CRAYSC1',
	'CRAYT3E'    => 'CRAYT3E',
	'CRAYX1'     => 'CRAYX1',
	'CONNEX'     => 'CONNEX',
	'Digital UNIX' => 'Digital UNIX',
	'ALPHA'      => 'ALPHA',
	'ALPHA5'     => 'ALPHA5',
	'ALPHASC'    => 'ALPHASC',
	'EXEMPLAR'   => 'EXEMPLAR',
	'HASOL'      => 'HASOL',
	'HITACHI'    => 'HITACHI',
	'HPPA'       => 'HPPA',
	'IBMAIX3'    => 'IBMAIX3',
	'IBMAIX4'    => 'IBMAIX4',
	'IBMAIX532'  => 'IBMAIX532',
	'IMBAIX564'  => 'IBMAIX564',
	'LINUX'      => 'LINUX2',
	'LINUXAXP'   => 'LINUXAXP',
	'LINUX86'    => 'LINUX86',
	'LINUXPPC'   => 'LINUXPPC',
	'LINUX64'    => 'LINUX64',
	'DLINUX'     => 'DLINUX',
	'DLINUX64'   => 'DLINUX64',
	'DLINXAXP'   => 'DLINXAXP',
	'SCYLD'      => 'SCYLD',
	'SLINUX'     => 'SLINUX',
	'SLINUX64'   => 'SLINUX64',
	'NEC'        => 'NEC',
	'NECEWS'     => 'NECEWS',
	'NECSX3'     => 'NECSX3',
	'NECSX4'     => 'NECSX4',
	'NECSX5'     => 'NECSX5',
	'NECSX6'     => 'NECSX6',
	'NECSX8'     => 'NECSX8',
	'NTX86'      => 'NTX86',
	'NTX64'      => 'NTX64',
	'NTIA64'     => 'NTIA64',
	'NTALPHA'    => 'NTALPHA',
	'SCO'        => 'SCO',
	'SGI5'       => 'SGI5',
	'SGI6'       => 'SGI6',
	'SUNSOL'     => 'SUNSOL',
	'SOL732'     => 'SOL732',
	'SONY'       => 'SONY',
	'SUN41'      => 'SUN41',
	'ULTRIX'     => 'ULTRIX',
	'WIN95'      => 'WIN95',
	'SOL64'      => 'SOL64',
	'SGI64'      => 'SGI64',
	'SGI65'      => 'SGI65',
	'SGI658'     => 'SGI658',
	'SOLX86'     => 'SOLX86',
	'SOLX8664'   => 'SOLX8664',
	'SPP'        => 'SPP',
	'HPPA11'     => 'HPPA11',
	'HPUXIA64'   => 'HPUXIA64',
	'MACOSX'     => 'MACOSX',
	'LNXS39032'  => 'LNXS39032',
	'LNXS390X64' => 'LNXS390X64',
	'LINUXPPC64' => 'LINUXPPC64',
	'BPROC'      => 'BPROC',
	'BPROC4'     => 'BPROC4',
	'LINUX_ARM'  => 'LINUX_ARM',
	'X86_64'     => 'X86_64',
	'SX86_64'    => 'SX86_64',
	'IA64'       => 'IA64',
	'DIA64'      => 'DIA64',
	'SIA64'      => 'SIA64'
);

$grid_lsf_host_model = array(
	'!'              => 'Auto Detect',
	'PC75'           => 'PC75',
	'PC90'           => 'PC90',
	'PC100'          => 'PC100',
	'PC133'          => 'PC133',
	'PC150'          => 'PC150',
	'PC166'          => 'PC166',
	'LINUX133'       => 'LINUX133',
	'PC200'          => 'PC200',
	'PC233'          => 'PC233',
	'PC266'          => 'PC266',
	'PC300'          => 'PC300',
	'PC333'          => 'PC333',
	'PC350'          => 'PC350',
	'PC400'          => 'PC400',
	'PC450'          => 'PC450',
	'PC1133'         => 'PC1133',
	'PC6000'         => 'PC6000',
	'Opteron140'     => 'Opteron140',
	'Opteron142'     => 'Opteron142',
	'Opteron144'     => 'Opteron144',
	'Opteron146'     => 'Opteron146',
	'Opteron148'     => 'Opteron148',
	'Opteron240'     => 'Opteron240',
	'Opteron242'     => 'Opteron242',
	'Opteron244'     => 'Opteron244',
	'Opteron246'     => 'Opteron246',
	'Opteron248'     => 'Opteron248',
	'Opteron840'     => 'Opteron840',
	'Opteron842'     => 'Opteron842',
	'Opteron844'     => 'Opteron844',
	'Opteron846'     => 'Opteron846',
	'Opteron848'     => 'Opteron848',
	'Intel_EM64T'    => 'Intel_EM64T',
	'Intel_IA64'     => 'Intel_IA64',
	'SN_IPF'         => 'SN_IPF',
	'Itanium2'       => 'Itanium2',
	'PowerMac'       => 'PowerMac',
	'MacPro'         => 'MacPro',
	'POWER5gr'       => 'POWER5gr',
	'RackMac'        => 'RackMac',
	'IntelMac'       => 'IntelMac',
	'HP9K712S'       => 'HP9K712S',
	'HP9K712M'       => 'HP9K712M',
	'HP9K712F'       => 'HP9K712F',
	'HP9K715'        => 'HP9K715',
	'HP9K735'        => 'HP9K735',
	'HP9K819'        => 'HP9K819',
	'HP9K778'        => 'HP9K778',
	'Jensen'         => 'Jensen',
	'Cabrio2'        => 'Cabrio2',
	'Cabrio3'        => 'Cabrio3',
	'NoName'         => 'NoName',
	'Alcor'          => 'Alcor',
	'Durango'        => 'Durango',
	'Miata'          => 'Miata',
	'Indy'           => 'Indy',
	'Challenge'      => 'Challenge',
	'Origin200'      => 'Origin200',
	'DEC3000M5'      => 'DEC3000M5',
	'DEC3000M7'      => 'DEC3000M7',
	'DEC3000M9'      => 'DEC3000M9',
	'AS800'          => 'AS800',
	'AS1000A2'       => 'AS1000A2',
	'AS1000A3'       => 'AS1000A3',
	'AS1000A5'       => 'AS1000A5',
	'AS1200'         => 'AS1200',
	'AS2000'         => 'AS2000',
	'AS2100'         => 'AS2100',
	'AS2100A'        => 'AS2100A',
	'AS40004'        => 'AS40004',
	'AS40005'        => 'AS40005',
	'AS40006'        => 'AS40006',
	'AS41003'        => 'AS41003',
	'AS41004'        => 'AS41004',
	'AS41005'        => 'AS41005',
	'AS8X003'        => 'AS8X003',
	'AS8X004'        => 'AS8X004',
	'AS8X006'        => 'AS8X006',
	'ASDS205'        => 'ASDS205',
	'ASDS20E'        => 'ASDS20E',
	'ASES406'        => 'ASES406',
	'ASES456'        => 'ASES456',
	'ASES451250'     => 'ASES451250',
	'AW2001'         => 'AW2001',
	'AW2002'         => 'AW2002',
	'AW5002'         => 'AW5002',
	'AW5004'         => 'AW5004',
	'AW500'          => 'AW500',
	'AW600'          => 'AW600',
	'CrayC90'        => 'CrayC90',
	'CrayJ90'        => 'CrayJ90',
	'CrayT90'        => 'CrayT90',
	'CrayT3E'        => 'CrayT3E',
	'CraySV1'        => 'CraySV1',
	'Sparc5S'        => 'Sparc5S',
	'Sparc5F'        => 'Sparc5F',
	'Sparc20'        => 'Sparc20',
	'Ultra5S'        => 'Ultra5S',
	'Ultra5F'        => 'Ultra5F',
	'Ultra30'        => 'Ultra30',
	'Ultra10'        => 'Ultra10',
	'Ultra2'         => 'Ultra2',
	'Ultra60S'       => 'Ultra60S',
	'Ultra60F'       => 'Ultra60F',
	'Ultra450'       => 'Ultra450',
	'UltraAXi2'      => 'UltraAXi2',
	'Enterprise3000' => 'Enterprise3000',
	'Starfire'       => 'Starfire',
	'SunBlade2K'     => 'SunBlade2K',
	'Risc250'        => 'Risc250',
	'Risc380'        => 'Risc380',
	'Risc590'        => 'Risc590',
	'RiscR24'        => 'RiscR24',
	'PowerPC_G4'     => 'PowerPC_G4',
	'PowerPC_POWER4' => 'PowerPC_POWER4',
	'PowerPC_POWER5' => 'PowerPC_POWER5',
	'Origin200'      => 'Origin200',
	'ARM5l'          => 'ARM5l'
);

$grid_lsf_nice = array(
	'-20' => '-20',
	'-19' => '-19',
	'-18' => '-18',
	'-17' => '-17',
	'-16' => '-16',
	'-15' => '-15',
	'-14' => '-14',
	'-13' => '-13',
	'-12' => '-12',
	'-11' => '-11',
	'-10' => '-10',
	'-9'  => '-9',
	'-8'  => '-8',
	'-7'  => '-7',
	'-6'  => '-6',
	'-5'  => '-5',
	'-4'  => '-4',
	'-3'  => '-3',
	'-2'  => '-2',
	'-1'  => '-1',
	'0'   => '0',
	'1'   => '1',
	'2'   => '2',
	'3'   => '3',
	'4'   => '4',
	'5'   => '5',
	'6'   => '6',
	'7'   => '7',
	'8'   => '8',
	'9'   => '9',
	'10'  => '10',
	'11'  => '11',
	'12'  => '12',
	'13'  => '13',
	'14'  => '14',
	'15'  => '15',
	'16'  => '16',
	'17'  => '17',
	'18'  => '18',
	'19'  => '19',
	'20'  => '20'
);

if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') {
	$grid_protocol = array(
		'winrs' => __('WinRS', 'grid'),
		'local' => __('Local', 'grid')
	);
} else {
	$grid_protocol = array(
		'rsh' => __('RSH', 'grid'),
		'ssh' => __('SSH', 'grid'),
		'local' => __('Local', 'grid')
	);
}

$grid_base_errors = array(
	LSE_NO_ERR           => array(__('Ok', 'grid'),          __('No Error', 'grid')),
	LSE_BAD_XDR          => array(__('Proto', 'grid'),       __('Error during XDR', 'grid')),
	LSE_MSG_SYS          => array(__('Comm', 'grid'),        __('Failed in sending/receiving a msg', 'grid')),
	LSE_BAD_ARGS         => array(__('Bad Arg', 'grid'),     __('Supplied arguments invalid', 'grid')),
	LSE_MASTR_UNKNW      => array(__('No Master', 'grid'),   __('Cannot find out the master LIM', 'grid')),
	LSE_LIM_DOWN         => array(__('LIM Down', 'grid'),    __('LIM does not respond', 'grid')),
	LSE_PROTOC_LIM       => array(__('Proto', 'grid'),       __('LIM protocol error', 'grid')),
	LSE_SOCK_SYS         => array(__('Comm', 'grid'),        __('A socket operation has failed', 'grid')),
	LSE_ACCEPT_SYS       => array(__('Syscall', 'grid'),     __('Failed in a accept system call', 'grid')),
	LSE_BAD_TASKF        => array(__('Bad ENV', 'grid'),     __('Bad LSF task file format', 'grid')),
	LSE_NO_HOST          => array(__('No LIM Host', 'grid'), __('Not enough ok hosts found by LIM', 'grid')),
	LSE_NO_ELHOST        => array(__('No LIM Host', 'grid'), __('No host is found eligible by LIM', 'grid')),
	LSE_TIME_OUT         => array(__('Time Out', 'grid'),    __('Communication timed out', 'grid')),
	LSE_NIOS_DOWN        => array(__('NIOS Down', 'grid'),   __('NIOS has not been started.', 'grid')),
	LSE_LIM_DENIED       => array(__('LIM Deny', 'grid'),    __('Operation permission denied by LIM', 'grid')),
	LSE_LIM_IGNORE       => array(__('LIM Ignore', 'grid'),  __('Operation ignored by LIM', 'grid')),
	LSE_LIM_BADHOST      => array(__('Bad Host', 'grid'),    __('Hostname not recognizable by LIM', 'grid')),
	LSE_LIM_ALOCKED      => array(__('LIM Lock', 'grid'),    __('LIM already locked', 'grid')),
	LSE_LIM_NLOCKED      => array(__('LIM Lock', 'grid'),    __('LIM was not locked.', 'grid')),
	LSE_LIM_BADMOD       => array(__('Bad Host', 'grid'),    __('Unknown host model.', 'grid')),
	LSE_SIG_SYS          => array(__('Syscall', 'grid'),     __('A signal related system call failed', 'grid')),
	LSE_BAD_EXP          => array(__('Resreq', 'grid'),      __('Bad resource req. expression', 'grid')),
	LSE_NORCHILD         => array(__('No Child', 'grid'),    __('No remote child', 'grid')),
	LSE_MALLOC           => array(__('Memory', 'grid'),      __('Memory allocation failed', 'grid')),
	LSE_LSFCONF          => array(__('No Conf', 'grid'),     __('Unable to open lsf.conf', 'grid')),
	LSE_BAD_ENV          => array(__('Bad ENV', 'grid'),     __('Bad configuration environment', 'grid')),
	LSE_LIM_NREG         => array(__('Bad ENV', 'grid'),     __('LIM is not a registered service', 'grid')),
	LSE_RES_NREG         => array(__('Bad ENV', 'grid'),     __('RES is not a registered service', 'grid')),
	LSE_RES_NOMORECONN   => array(__('Comm', 'grid'),        __('RES is serving too many connections', 'grid')),
	LSE_BADUSER          => array(__('Bad ENV', 'grid'),     __('Bad user ID for REX', 'grid')),
	LSE_RES_ROOTSECURE   => array(__('Root Rx', 'grid'),     __('Root user rejected', 'grid')),
	LSE_RES_DENIED       => array(__('Permission', 'grid'),  __('User permission denied', 'grid')),
	LSE_BAD_OPCODE       => array(__('Proto', 'grid'),       __('Bad op code', 'grid')),
	LSE_PROTOC_RES       => array(__('Proto', 'grid'),       __('RES Protocol error', 'grid')),
	LSE_RES_CALLBACK     => array(__('Comm', 'grid'),        __('RES callback fails', 'grid')),
	LSE_RES_NOMEM        => array(__('Memory', 'grid'),      __('RES malloc fails', 'grid')),
	LSE_RES_FATAL        => array(__('Syscall', 'grid'),     __('RES system call error', 'grid')),
	LSE_RES_PTY          => array(__('Bad ENV', 'grid'),     __('RES cannot alloc pty', 'grid')),
	LSE_RES_SOCK         => array(__('Comm', 'grid'),        __('RES socketpair fails', 'grid')),
	LSE_RES_FORK         => array(__('Syscall', 'grid'),     __('RES fork fails', 'grid')),
	LSE_NOMORE_SOCK      => array(__('Syscall', 'grid'),     __('Privileged socks run out', 'grid')),
	LSE_WDIR             => array(__('Syscall', 'grid'),     __('getwd() failed', 'grid')),
	LSE_RES_INVCHILD     => array(__('Comm', 'grid'),        __('No such remote child', 'grid')),
	LSE_RES_KILL         => array(__('Permission', 'grid'),  __('Remote kill permission denied', 'grid')),
	LSE_PTYMODE          => array(__('Bad ENV', 'grid'),     __('Ptymode inconsistency', 'grid')),
	LSE_BAD_HOST         => array(__('Bad Host', 'grid'),    __('Bad hostname', 'grid')),
	LSE_PROTOC_NIOS      => array(__('Proto', 'grid'),       __('NIOS protocol error', 'grid')),
	LSE_WAIT_SYS         => array(__('Syscall', 'grid'),     __('A wait system call failed', 'grid')),
	LSE_SETPARAM         => array(__('Params', 'grid'),      __('Bad parameters for setstdin', 'grid')),
	LSE_RPIDLISTLEN      => array(__('Bad ENV', 'grid'),     __('Insufficient list len for rpids', 'grid')),
	LSE_BAD_CLUSTER      => array(__('Bad Cluster', 'grid'), __('Invalid cluster name', 'grid')),
	LSE_RES_VERSION      => array(__('Bad ENV', 'grid'),     __('Incompatible versions of tty params', 'grid')),
	LSE_EXECV_SYS        => array(__('Syscall', 'grid'),     __('Failed in a execv() sys call', 'grid')),
	LSE_RES_DIR          => array(__('Filesys', 'grid'),     __('No such directory', 'grid')),
	LSE_RES_DIRW         => array(__('No Dir', 'grid'),      __('The directory may not be accessible', 'grid')),
	LSE_BAD_SERVID       => array(__('Bad ENV', 'grid'),     __('The service ID is invalid', 'grid')),
	LSE_NLSF_HOST        => array(__('NonLSF Host', 'grid'), __('Request from a non lsf host', 'grid')),
	LSE_UNKWN_RESNAME    => array(__('Resreq', 'grid'),      __('Unknown resource name specified', 'grid')),
	LSE_UNKWN_RESVALUE   => array(__('Resreq', 'grid'),      __('Unknown resource value', 'grid')),
	LSE_TASKEXIST        => array(__('Bad ENV', 'grid'),     __('The task already registered', 'grid')),
	LSE_BAD_TID          => array(__('Bad ENV', 'grid'),     __('The task does not exist', 'grid')),
	LSE_TOOMANYTASK      => array(__('Bad ENV', 'grid'),     __('The task table is full', 'grid')),
	LSE_LIMIT_SYS        => array(__('Syscall', 'grid'),     __('A resource limit sys call failed', 'grid')),
	LSE_BAD_NAMELIST     => array(__('Bad ENV', 'grid'),     __('Bad index name list', 'grid')),
	LSE_NO_LICENSE       => array(__('No License', 'grid'),  __('No software license for host', 'grid')),
	LSE_LIM_NOMEM        => array(__('Memory', 'grid'),      __('LIM malloc failure', 'grid')),
	LSE_NIO_INIT         => array(__('Comm', 'grid'),        __('NIOS not initialized.', 'grid')),
	LSE_CONF_SYNTAX      => array(__('Bad Conf', 'grid'),    __('Bad lsf.conf/lsf.sudoers syntax', 'grid')),
	LSE_FILE_SYS         => array(__('Syscall', 'grid'),     __('A file operation failed', 'grid')),
	LSE_CONN_SYS         => array(__('Syscall', 'grid'),     __('A connect sys call failed', 'grid')),
	LSE_SELECT_SYS       => array(__('Syscall', 'grid'),     __('A select system call failed', 'grid')),
	LSE_EOF              => array(__('EOF', 'grid'),         __('Reached the end of file', 'grid')),
	LSE_ACCT_FORMAT      => array(__('Bad ENV', 'grid'),     __('Bad lsf.acct file format', 'grid')),
	LSE_BAD_TIME         => array(__('Bad ENV', 'grid'),     __('Bad time specification', 'grid')),
	LSE_FORK             => array(__('Syscall', 'grid'),     __('Unable to fork child', 'grid')),
	LSE_PIPE             => array(__('Syscall', 'grid'),     __('Failed to setup pipe', 'grid')),
	LSE_ESUB             => array(__('Filesys', 'grid'),     __('esub/eexec file not found', 'grid')),
	LSE_DCE_EXEC         => array(__('Sycall', 'grid'),      __('DCE task exec fail', 'grid')),
	LSE_EAUTH            => array(__('EAuth', 'grid'),       __('External authentication failed', 'grid')),
	LSE_NO_FILE          => array(__('Filesys', 'grid'),     __('Cannot open file', 'grid')),
	LSE_NO_CHAN          => array(__('Comm', 'grid'),        __('Out of communication channels', 'grid')),
	LSE_BAD_CHAN         => array(__('Comm', 'grid'),        __('Bad communication channel', 'grid')),
	LSE_INTERNAL         => array(__('Liberr', 'grid'),      __('Internal library error', 'grid')),
	LSE_PROTOCOL         => array(__('Proto', 'grid'),       __('Protocol error with server', 'grid')),
	LSE_THRD_SYS         => array(__('Syscall', 'grid'),     __('A thread system call failed (NT only)', 'grid')),
	LSE_MISC_SYS         => array(__('Syscall', 'grid'),     __('A system call failed', 'grid')),
	LSE_LOGON_FAIL       => array(__('Permission', 'grid'),  __('Failed to logon user (NT only)', 'grid')),
	LSE_RES_RUSAGE       => array(__('Comm', 'grid'),        __('Failed to get rusage from RES', 'grid')),
	LSE_NO_RESOURCE      => array(__('Resreq', 'grid'),      __('No shared resource defined', 'grid')),
	LSE_BAD_RESOURCE     => array(__('Resreq', 'grid'),      __('Bad resource name', 'grid')),
	LSE_RES_PARENT       => array(__('RES Fail', 'grid'),    __('RES child Failed to contact parent', 'grid')),
	LSE_NO_PASSWD        => array(__('No Passwd', 'grid'),   __('No password for user', 'grid')),
	LSE_SUDOERS_CONF     => array(__('File Sys', 'grid'),    __('lsf.sudoers file error', 'grid')),
	LSE_SUDOERS_ROOT     => array(__('Bad ENV', 'grid'),     __('lsf.sudoers not owned by root', 'grid')),
	LSE_I18N_SETLC       => array(__('Bad ENV', 'grid'),     __('i18n setlocale failed', 'grid')),
	LSE_I18N_CATOPEN     => array(__('Open Fail', 'grid'),   __('i18n catopen failed', 'grid')),
	LSE_I18N_NOMEM       => array(__('Memory', 'grid'),      __('i18n malloc failed', 'grid')),
	LSE_NO_MEM           => array(__('Memory', 'grid'),      __('Cannot alloc memory', 'grid')),
	LSE_REGISTRY_SYS     => array(__('Reg Fail', 'grid'),    __('A registry system call failed (NT)', 'grid')),
	LSE_FILE_CLOSE       => array(__('Null File', 'grid'),   __('Close a NULL-FILE pointer', 'grid')),
	LSE_LIMCONF_NOTREADY => array(__('Not Ready', 'grid'),   __('LIM configuration is not ready yet', 'grid')),
	LSE_MASTER_LIM_DOWN  => array(__('LIM Down', 'grid'),    __('For LIM_CONF master LIM down', 'grid')),
	LSE_MLS_INVALID      => array(__('Bad Label', 'grid'),   __('Invalid MLS label', 'grid')),
	LSE_MLS_CLEARANCE    => array(__('No Clear', 'grid'),    __('Not enough clearance', 'grid')),
	LSE_MLS_RHOST        => array(__('RHost', 'grid'),       __('Reject by rhost.conf', 'grid')),
	LSE_MLS_DOMINATE     => array(__('Bad ENV', 'grid'),     __('Require label not dominate', 'grid')),
	LSE_NO_CAL           => array(__('No Cal', 'grid'),      __('Win32: No more connections can be', 'grid')),
	LSE_NO_NETWORK       => array(__('No Network', 'grid'),  __('Network location cannot be found', 'grid')),
	LSE_GETCONF_FAILED   => array(__('No Conf', 'grid'),     __('Failed to get configuration', 'grid')),
	LSE_TSSINIT          => array(__('Comm', 'grid'),        __('Win32: terminal service not properly initialized', 'grid')),
	LSE_DYNM_DENIED      => array(__('Permission', 'grid'),  __('Dynamic addHost denied', 'grid')),
	LSE_LIC_OVERUSE      => array(__('Over Use', 'grid'),    __('In license overuse status', 'grid')),
	LSE_NERR             => array(__('Ok', 'grid'),          __('Moving number, size of ls_errmsg[]', 'grid'))
);

$grid_batch_errors = array(
	LSBE_NO_ERROR         => array(__('No Error', 'grid'),     __('No error at all', 'grid')),
	LSBE_NO_JOB           => array(__('Job Cond', 'grid'),     __('No matching job found', 'grid')),
	LSBE_NOT_STARTED      => array(__('Job Cond', 'grid'),     __('Job not started yet', 'grid')),
	LSBE_JOB_STARTED      => array(__('Job Cond', 'grid'),     __('Job already started', 'grid')),
	LSBE_JOB_FINISH       => array(__('Job Cond', 'grid'),     __('Job already finished', 'grid')),
	LSBE_STOP_JOB         => array(__('BadJob', 'grid'),       __('Ask sbatchd to stop the wrong job', 'grid')),
	LSBE_DEPEND_SYNTAX    => array(__('Syntax', 'grid'),       __('Depend_cond syntax error', 'grid')),
	LSBE_EXCLUSIVE        => array(__('Queue Cond', 'grid'),   __('Queue doesn\'t accept EXCLUSIVE job', 'grid')),
	LSBE_ROOT             => array(__('Root Reject', 'grid'),  __('Root is not allowed to submit jobs', 'grid')),
	LSBE_MIGRATION        => array(__('Job Cond', 'grid'),     __('Job is already being migrated', 'grid')),
	LSBE_J_UNCHKPNTABLE   => array(__('Job Cond', 'grid'),     __('Job is not chkpntable', 'grid')),
	LSBE_NO_OUTPUT        => array(__('Job Cond', 'grid'),     __('Job has no output so far', 'grid')),
	LSBE_NO_JOBID         => array(__('Job Cond', 'grid'),     __('No jobId can be used now', 'grid')),
	LSBE_ONLY_INTERACTIVE => array(__('Queue Cond', 'grid'),   __('Queue only accepts bsub -I job', 'grid')),
	LSBE_NO_INTERACTIVE   => array(__('Queue Cond', 'grid'),   __('Queue doesn\'t accept bsub -I job', 'grid')),
	LSBE_NO_USER          => array(__('User Cond', 'grid'),    __('No user defined in lsb.users file', 'grid')),
	LSBE_BAD_USER         => array(__('User Cond', 'grid'),    __('Bad user name', 'grid')),
	LSBE_PERMISSION       => array(__('Perms', 'grid'),        __('User permission denied', 'grid')),
	LSBE_BAD_QUEUE        => array(__('Queue Cond', 'grid'),   __('No such queue in the system', 'grid')),
	LSBE_QUEUE_NAME       => array(__('Queue Cond', 'grid'),   __('Queue name should be given', 'grid')),
	LSBE_QUEUE_CLOSED     => array(__('Queue Cond', 'grid'),   __('Queue has been closed', 'grid')),
	LSBE_QUEUE_WINDOW     => array(__('Queue Cond', 'grid'),   __('Queue windows are closed', 'grid')),
	LSBE_QUEUE_USE        => array(__('User Cond', 'grid'),    __('User cannot use the queue', 'grid')),
	LSBE_BAD_HOST         => array(__('Group Cond', 'grid'),   __('Bad host name or host group name', 'grid')),
	LSBE_PROC_NUM         => array(__('Job Cond', 'grid'),     __('Too many processors requested', 'grid')),
	LSBE_NO_HPART         => array(__('Part Cond', 'grid'),    __('No host partition in the system', 'grid')),
	LSBE_BAD_HPART        => array(__('Part Cond', 'grid'),    __('Bad host partition name', 'grid')),
	LSBE_NO_GROUP         => array(__('Group Cond', 'grid'),   __('No group defined in the system', 'grid')),
	LSBE_BAD_GROUP        => array(__('Group Cond', 'grid'),   __('Bad host/user group name', 'grid')),
	LSBE_QUEUE_HOST       => array(__('Host Cond', 'grid'),    __('Host is not used by the queue', 'grid')),
	LSBE_UJOB_LIMIT       => array(__('User Cond', 'grid'),    __('User reach UJOB_LIMIT of the queue', 'grid')),
	LSBE_NO_HOST          => array(__('Host Cond', 'grid'),    __('No host available for migration', 'grid')),
	LSBE_BAD_CHKLOG       => array(__('Sys Cond', 'grid'),     __('chklog is corrupted', 'grid')),
	LSBE_PJOB_LIMIT       => array(__('Queue Cond', 'grid'),   __('User reach PJOB_LIMIT of the queue', 'grid')),
	LSBE_NOLSF_HOST       => array(__('Sys Cond', 'grid'),     __('Request from non LSF host rejected', 'grid')),
	LSBE_BAD_ARG          => array(__('LIB Call', 'grid'),     __('Bad argument for lsblib call', 'grid')),
	LSBE_BAD_TIME         => array(__('TimeSpec', 'grid'),     __('Bad time spec for lsblib call', 'grid')),
	LSBE_START_TIME       => array(__('TimeSpec', 'grid'),     __('Start time is later than end time', 'grid')),
	LSBE_BAD_LIMIT        => array(__('Queue Cond', 'grid'),   __('Bad CPU limit specification', 'grid')),
	LSBE_OVER_LIMIT       => array(__('Queue Cond', 'grid'),   __('Over hard limit of queue', 'grid')),
	LSBE_BAD_CMD          => array(__('Job Cond', 'grid'),     __('Empty job (command)', 'grid')),
	LSBE_BAD_SIGNAL       => array(__('Control Cond', 'grid'), __('Bad signal value; not supported', 'grid')),
	LSBE_BAD_JOB          => array(__('Job Cond', 'grid'),     __('Bad job name', 'grid')),
	LSBE_QJOB_LIMIT       => array(__('Queue Cond', 'grid'),   __('Queue reach QJOB_LIMIT of the queue', 'grid')),
	LSBE_UNKNOWN_EVENT    => array(__('Unknown', 'grid'),      __('Unknown event in event log file', 'grid')),
	LSBE_EVENT_FORMAT     => array(__('Sys Cond', 'grid'),     __('Bad event format in event log file', 'grid')),
	LSBE_EOF              => array(__('EOF', 'grid'),          __('End of file', 'grid')),
	LSBE_MBATCHD          => array(__('MBD Error', 'grid'),    __('Mbatchd internal error', 'grid')),
	LSBE_SBATCHD          => array(__('SBD Error', 'grid'),    __('Sbatchd internal error', 'grid')),
	LSBE_LSBLIB           => array(__('LIB Error', 'grid'),    __('LSBATCH lib internal error', 'grid')),
	LSBE_LSLIB            => array(__('LIB Call', 'grid'),     __('LSLIB call fails', 'grid')),
	LSBE_SYS_CALL         => array(__('Sys Call', 'grid'),     __('System call fails', 'grid')),
	LSBE_NO_MEM           => array(__('Memory', 'grid'),       __('Cannot alloc memory', 'grid')),
	LSBE_SERVICE          => array(__('Environ', 'grid'),      __('LSBATCH service not registered', 'grid')),
	LSBE_NO_ENV           => array(__('Environ', 'grid'),      __('LSB_SHAREDIR not defined', 'grid')),
	LSBE_CHKPNT_CALL      => array(__('Sys Call', 'grid'),     __('Chkpnt system call fail', 'grid')),
	LSBE_NO_FORK          => array(__('Memory', 'grid'),       __('Mbatchd cannot fork', 'grid')),
	LSBE_PROTOCOL         => array(__('Proto', 'grid'),        __('LSBATCH protocol error', 'grid')),
	LSBE_XDR              => array(__('XDR', 'grid'),          __('XDR en/decode error', 'grid')),
	LSBE_PORT             => array(__('Comm', 'grid'),         __('No appropriate port can be bound', 'grid')),
	LSBE_TIME_OUT         => array(__('Timeout', 'grid'),      __('Timeout in contacting mbatchd', 'grid')),
	LSBE_CONN_TIMEOUT     => array(__('Timeout', 'grid'),      __('Timeout on connect(), call', 'grid')),
	LSBE_CONN_REFUSED     => array(__('Refused', 'grid'),      __('Connection refused by server', 'grid')),
	LSBE_CONN_EXIST       => array(__('Comm', 'grid'),         __('Server connection already exists', 'grid')),
	LSBE_CONN_NONEXIST    => array(__('Comm', 'grid'),         __('Server is not connected', 'grid')),
	LSBE_SBD_UNREACH      => array(__('Comm', 'grid'),         __('SBD cannot be reached', 'grid')),
	LSBE_OP_RETRY         => array(__('Try Later', 'grid'),    __('Operation cannot be performed right now, op. Will be retried.', 'grid')),
	LSBE_USER_JLIMIT      => array(__('Slot Lim', 'grid'),     __('User has not enough job slots', 'grid'))
);
