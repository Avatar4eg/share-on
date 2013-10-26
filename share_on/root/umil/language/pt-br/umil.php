<?php
/**
 *
 * @author Nathan Guse (EXreaction) http://lithiumstudios.org
 * @author David Lewis (Highway of Life) highwayoflife@gmail.com
 * @package umil
 * @version $Id$
 * @copyright (c) 2010 Suporte phpBB < http://www.suportephpbb.com.br >
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 * Original copyright (c) 2008 phpBB Group  
 *
 */

/**
 * @ignore
 */
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// � � � � �
//

$lang = array_merge($lang, array(
	'ACTION'						=> 'A��o',
	'ADVANCED'						=> 'Avan�ado',
	'AUTH_CACHE_PURGE'				=> 'Limpando o cache de autentica��o',

	'CACHE_PURGE'					=> 'Limpando o cache do f�rum',
	'CONFIGURE'						=> 'Configurar',
	'CONFIG_ADD'					=> 'Adicionando uma nova vari�vel de configura��o: %s',
	'CONFIG_ALREADY_EXISTS'			=> 'ERRO: A vari�vel de configura��o %s j� existe.',
	'CONFIG_NOT_EXIST'				=> 'ERRO: A vari�vel de configura��o %s n�o existe.',
	'CONFIG_REMOVE'					=> 'Removendo vari�vel de configura��o: %s',
	'CONFIG_UPDATE'					=> 'Atualizando vari�vel de configura��o: %s',

	'DISPLAY_RESULTS'				=> 'Exibir resultados completos',
	'DISPLAY_RESULTS_EXPLAIN'		=> 'Selecione sim para mostrar todas as a��es e resultados ocorridos durante a a��o solicitada.',

	'ERROR_NOTICE'					=> 'Um ou mais erros ocorreram durante a a��o solicitada. Por favor, fa�a o download <a href="%1$s">deste arquivo</a> onde est� listado todos os erros e pe�a assist�ncia ao autor do mod.<br /><br />Se voc� tiver problema para fazer o download do arquivo, voc� dever� acessar diretamente com seu cliente FTP e acessar o seguinte local: %2$s',
	'ERROR_NOTICE_NO_FILE'			=> 'Um ou mais erros ocorreram durante a a��o solicitada.  Por favor, grave todos os erros ocorridos durante o processo e pe�a assist�ncia ao autor do mod.',

	'FAIL'							=> 'Falha',
	'FILE_COULD_NOT_READ'			=> 'ERRO: O arquivo %s n�o p�de ser aberto para leitura.',
	'FOUNDERS_ONLY'					=> 'Voc� deve ser o fundador do f�rum para acessar essa p�gina.',

	'GROUP_NOT_EXIST'				=> 'O grupo n�o existe',

	'IGNORE'						=> 'Ignorar',
	'IMAGESET_CACHE_PURGE'			=> 'Atualizado imageset do %s',
	'INSTALL'						=> 'Instalar',
	'INSTALL_MOD'					=> 'Instalar %s',
	'INSTALL_MOD_CONFIRM'			=> 'Tem certeza que deseja instalar %s?',

	'MODULE_ADD'					=> 'Adicionando m�dulo %1$s: %2$s',
	'MODULE_ALREADY_EXIST'			=> 'ERRO: M�dulo j� existe.',
	'MODULE_NOT_EXIST'				=> 'ERRO: M�dulo n�o existe.',
	'MODULE_REMOVE'					=> 'Removendo m�dulo %1$s: %2$s',

	'NONE'							=> 'Nenhum',
	'NO_TABLE_DATA'					=> 'ERRO: Nenhum dado da tabela foi especificado',

	'PARENT_NOT_EXIST'				=> 'ERRO: A categoria pai escolhida para este m�dulo n�o existe.',
	'PERMISSIONS_WARNING'			=> 'Novas configura��es de permiss�es foram adicionadas.  Para ter certeza, verifique suas configura��es de permiss�es e veja se est�o corretas e de acordo com seu gosto.',
	'PERMISSION_ADD'				=> 'Adicionando nova op��o da permiss�o: %s',
	'PERMISSION_ALREADY_EXISTS'		=> 'ERRO: A op��o de permiss�o %s j� existe.',
	'PERMISSION_NOT_EXIST'			=> 'ERRO: A op��o de permiss�o %s n�o existe.',
	'PERMISSION_REMOVE'				=> 'Removendo op��o de permiss�o: %s',
	'PERMISSION_ROLE_ADD'			=> 'Adicionando nova permiss�o de fun��o: %s',
	'PERMISSION_ROLE_UPDATE'		=> 'Atualizando permiss�o de fun��o: %s',
	'PERMISSION_ROLE_REMOVE'		=> 'Removendo permiss�o de fun��o: %s',
	'PERMISSION_SET_GROUP'			=> 'Definindo permiss�o para o grupo %s.',
	'PERMISSION_SET_ROLE'			=> 'Definindo as permiss�es para a fun��o %s.',
	'PERMISSION_UNSET_GROUP'		=> 'Retirando as defini��es de permiss�es para o grupo %s.',
	'PERMISSION_UNSET_ROLE'			=> 'Retirando as defini��es de permiss�es para a fun��o %s.',

	'ROLE_ALREADY_EXISTS'			=> 'A permiss�o de fun��o j� existe.',
	'ROLE_NOT_EXIST'				=> 'A permiss�o de fun��o n�o existe.',

	'SUCCESS'						=> 'Sucesso',

	'TABLE_ADD'						=> 'Adicionando nova tabela na base de dados: %s',
	'TABLE_ALREADY_EXISTS'			=> 'ERRO: A tabela %s j� existe na base de dados.',
	'TABLE_COLUMN_ADD'				=> 'Adicionando nova coluna denominada %2$s para a tabela %1$s',
	'TABLE_COLUMN_ALREADY_EXISTS'	=> 'ERRO: A coluna %2$s j� existe na tabela %1$s.',
	'TABLE_COLUMN_NOT_EXIST'		=> 'ERRO: A coluna %2$s n�o existe na tabela %1$s.',
	'TABLE_COLUMN_REMOVE'			=> 'Removendo a coluna denominada %2$s da tabela %1$s',
	'TABLE_COLUMN_UPDATE'			=> 'Atualizando a coluna denominada %2$s da tabela %1$s',
	'TABLE_KEY_ADD'					=> 'Adicionando chave denominada %2$s para a tabela %1$s',
	'TABLE_KEY_ALREADY_EXIST'		=> 'ERRO: O �ndice %2$s j� existe na tabela %1$s.',
	'TABLE_KEY_NOT_EXIST'			=> 'ERRO: O �ndice %2$s n�o existe na tabela %1$s.',
	'TABLE_KEY_REMOVE'				=> 'Removendo a chave denominada %2$s da tabela %1$s',
	'TABLE_NOT_EXIST'				=> 'ERRO: A tabela da base de dados %s n�o existe.',
	'TABLE_REMOVE'					=> 'Removendo da base de dados a tabela: %s',
	'TABLE_ROW_INSERT_DATA'			=> 'Inserindo dados na tabela %s na base de dados.',
	'TABLE_ROW_REMOVE_DATA'			=> 'Removendo a linha da tabela %s na base de dados.',
	'TABLE_ROW_UPDATE_DATA'			=> 'Atualizando a linha da tabela %s na base de dados.',
	'TEMPLATE_CACHE_PURGE'			=> 'Atualizando o template do %s',
	'THEME_CACHE_PURGE'				=> 'Atualizando o tema do %s theme',

	'UNINSTALL'						=> 'Desinstalar',
	'UNINSTALL_MOD'					=> 'Desinstalar %s',
	'UNINSTALL_MOD_CONFIRM'			=> 'Voc� realmente quer desinstalar %s?  Todas as configura��es e dados salvos por esta MOD ser�o removidos!',
	'UNKNOWN'						=> 'Desconhecido',
	'UPDATE_MOD'					=> 'Atualizar %s',
	'UPDATE_MOD_CONFIRM'			=> 'Voc� realmente quer atualizar %s?',
	'UPDATE_UMIL'					=> 'Esta vers�o do UMIL est� desatualizada.<br /><br />Por favor, fa�a o download da �ltima vers�o do UMIL (Unified MOD Install Library) no: <a href="%1$s" target="_blank">%1$s</a>',

	'VERSIONS'						=> 'Vers�o da MOD: <strong>%1$s</strong><br />Instalada atualmente: <strong>%2$s</strong>',
	'VERSION_SELECT'				=> 'Selecionar vers�o',
	'VERSION_SELECT_EXPLAIN'		=> 'N�o altere para �Ignorar� a menos que vc saiba o que est� fazendo ou disseram para voc� fazer',
));

?>