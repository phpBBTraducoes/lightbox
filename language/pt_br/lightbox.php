<?php
/**
 *
 * Lightbox extension for the phpBB Forum Software package.
 * [Brazilian Portuguese]
 * Brazilian Portuguese translation by eunaumtenhoid (c) 2017 [ver 2.0.0] (https://github.com/phpBBTraducoes)
 * @copyright (c) 2015 Matt Friedman
 * @license GNU General Public License, version 2 (GPL-2.0)
 * 
 */

/**
 * DO NOT CHANGE
 */
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'LIGHTBOX_SETTINGS'				=> 'Redimensionamento de imagem Lightbox',
	'LIGHTBOX_MAX_WIDTH'			=> 'Largura máxima da imagem',
	'LIGHTBOX_MAX_WIDTH_EXPLAIN'	=> 'Imagens que excedam essa largura serão redimensionadas e podem ser ampliadas usando o efeito Lightbox. Defina este valor como 0 para desativar o redimensionamento da imagem do Lightbox por largura.',
	'LIGHTBOX_MAX_WIDTH_APPEND'		=> 'Recomendação baseada em configurações de anexo de imagem: %spx',
	'LIGHTBOX_MAX_HEIGHT'			=> 'Altura máxima da imagem',
	'LIGHTBOX_MAX_HEIGHT_EXPLAIN'	=> 'Imagens que excedam essa altura serão redimensionadas e podem ser ampliadas usando o efeito Lightbox. Defina este valor como 0 para desativar o redimensionamento da imagem do Lightbox por altura.',
	'LIGHTBOX_ALL_IMAGES'			=> 'Incluir todas as imagens no efeito Lightbox',
	'LIGHTBOX_ALL_IMAGES_EXPLAIN'	=> 'Com essa configuração ativada, todas as imagens postadas podem ser abertas no efeito Lightbox, mesmo que não estejam sendo redimensionadas.',
	'LIGHTBOX_GALLERY'				=> 'Modo galeria',
	'LIGHTBOX_GALLERY_EXPLAIN'		=> 'Permite fácil navegação entre todas as imagens redimensionadas da página usando o efeito Lightbox.',
	'LIGHTBOX_GALLERY_ALL'			=> 'Todas as imagens redimensionadas na página',
	'LIGHTBOX_GALLERY_POSTS'		=> 'Todas as imagens redimensionadas por post',
	'LIGHTBOX_SIGNATURES'			=> 'Redimensiona imagens na assinatura',
	'LIGHTBOX_SIGNATURES_EXPLAIN'	=> 'Permite que imagens usadas em assinaturas sejam redimensionadas.',
	'LIGHTBOX_IMG_TITLES'			=> 'Mostra o nome de arquivo da imagem',
	'LIGHTBOX_IMG_TITLES_EXPLAIN'	=> 'Os nomes das imagens aparecerão como legendas no efeito Lightbox.',
));
