<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

$ClientID = 'navigation_'.$arResult['NavNum'];

$this->setFrameMode(true);

if(!$arResult["NavShowAlways"])
{
	if ($arResult["NavRecordCount"] == 0 || ($arResult["NavPageCount"] == 1 && $arResult["NavShowAll"] == false))
		return;
}
?>


<?
$strNavQueryString = ($arResult["NavQueryString"] != "" ? $arResult["NavQueryString"]."&amp;" : "");
$strNavQueryStringFull = ($arResult["NavQueryString"] != "" ? "?".$arResult["NavQueryString"] : "");
if($arResult["bDescPageNumbering"] === true)
{
	// to show always first and last pages
	$arResult["nStartPage"] = $arResult["NavPageCount"];
	$arResult["nEndPage"] = 1;

	$sPrevHref = '';
	if ($arResult["NavPageNomer"] < $arResult["NavPageCount"])
	{
		$bPrevDisabled = false;
		if ($arResult["bSavePage"])
		{
			$sPrevHref = $arResult["sUrlPath"].'?'.$strNavQueryString.'PAGEN_'.$arResult["NavNum"].'='.($arResult["NavPageNomer"]+1);
		}
		else
		{
			if ($arResult["NavPageCount"] == ($arResult["NavPageNomer"]+1))
			{
				$sPrevHref = $arResult["sUrlPath"].$strNavQueryStringFull;
			}
			else
			{
				$sPrevHref = $arResult["sUrlPath"].'?'.$strNavQueryString.'PAGEN_'.$arResult["NavNum"].'='.($arResult["NavPageNomer"]+1);
			}
		}
	}
	else
	{
		$bPrevDisabled = true;
	}
	
	$sNextHref = '';
	if ($arResult["NavPageNomer"] > 1)
	{
		$bNextDisabled = false;
		$sNextHref = $arResult["sUrlPath"].'?'.$strNavQueryString.'PAGEN_'.$arResult["NavNum"].'='.($arResult["NavPageNomer"]-1);
	}
	else
	{
		$bNextDisabled = true;
	}
	?>
    <ul class="reviews-pagination" style="display: none;">
            <span class="arrow">&larr;</span><span class="ctrl"> ctrl</span>&nbsp;<?if ($bPrevDisabled):?><span class="disabled"><?=GetMessage("nav_prev")?></span><?else:?><li class="reviews-pagination-item"><a href="<?=$sPrevHref;?>" id="<?=$ClientID?>_previous_page"><?=GetMessage("nav_prev")?></a></li><?endif;?>&nbsp;<?if ($bNextDisabled):?><span class="disabled"><?=GetMessage("nav_next")?></span><?else:?><li class="reviews-pagination-item"><a href="<?=$sNextHref;?>" id="<?=$ClientID?>_next_page"><?=GetMessage("nav_next")?></a></li><?endif;?>&nbsp;<span class="ctrl">ctrl </span><span class="arrow">&rarr;</span>
		</ul>
    <ul class="reviews-pagination"> <li class="reviews-pagination-item">
	<?
	$bFirst = true;
	$bPoints = false;
    do
    {
        if ($arResult["nStartPage"] <= 2 || $arResult["nEndPage"]-$arResult["nStartPage"] <= 1 || abs($arResult['nStartPage']-$arResult["NavPageNomer"])<=2)
        {

            if ($arResult["nStartPage"] == $arResult["NavPageNomer"]):
                ?> <li class="reviews-pagination-item">
                <a nohref class="active" class="nav-current-page"><?=$arResult["nStartPage"]?></a></li>
            <?
            elseif($arResult["nStartPage"] == 1 && $arResult["bSavePage"] == false):
                ?> <li class="reviews-pagination-item">

                <a href="<?=$arResult["sUrlPath"]?><?=$strNavQueryStringFull?>"><?=$arResult["nStartPage"]?></a></li>
            <?
            else:
                ?> <li class="reviews-pagination-item">
                <a href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=$arResult["nStartPage"]?>"><?=$arResult["nStartPage"]?></a> </li>
            <?
            endif;
            $bFirst = false;
            $bPoints = true;
        }
		else
		{
			if ($bPoints)
			{
	?>...<?
				$bPoints = false;
			}
		}
		$arResult["nStartPage"]--;
	} while($arResult["nStartPage"] >= $arResult["nEndPage"]);
}
else
{
	// to show always first and last pages
	$arResult["nStartPage"] = 1;
	$arResult["nEndPage"] = $arResult["NavPageCount"];

	$sPrevHref = '';
	if ($arResult["NavPageNomer"] > 1)
	{
		$bPrevDisabled = false;
		
		if ($arResult["bSavePage"] || $arResult["NavPageNomer"] > 2)
		{
			$sPrevHref = $arResult["sUrlPath"].'?'.$strNavQueryString.'PAGEN_'.$arResult["NavNum"].'='.($arResult["NavPageNomer"]-1);
		}
		else
		{
			$sPrevHref = $arResult["sUrlPath"].$strNavQueryStringFull;
		}
	}
	else
	{
		$bPrevDisabled = true;
	}

	$sNextHref = '';
	if ($arResult["NavPageNomer"] < $arResult["NavPageCount"])
	{
		$bNextDisabled = false;
		$sNextHref = $arResult["sUrlPath"].'?'.$strNavQueryString.'PAGEN_'.$arResult["NavNum"].'='.($arResult["NavPageNomer"]+1);
	}
	else
	{
		$bNextDisabled = true;
	}
	?></ul>
    <ul class="reviews-pagination" style="display: none;">
        <li class="reviews-pagination-item">   <span class="arrow">&larr;</span></li><li class="reviews-pagination-item"><span class="ctrl"> ctrl</span>&nbsp;</li><?if ($bPrevDisabled):?><span class="disabled"><?=GetMessage("nav_prev")?></span><?else:?><li class="reviews-pagination-item"><a href="<?=$sPrevHref;?>" id="<?=$ClientID?>_previous_page"><?=GetMessage("nav_prev")?></a></li><?endif;?>&nbsp;<?if ($bNextDisabled):?>      <li class="reviews-pagination-item"> <span class="disabled"><?=GetMessage("nav_next")?></span></li><?else:?><li class="reviews-pagination-item"><a href="<?=$sNextHref;?>" id="<?=$ClientID?>_next_page"><?=GetMessage("nav_next")?></a></li><?endif;?>      <li class="reviews-pagination-item"> <span class="ctrl">ctrl </span><span class="arrow">&rarr;</span></li>
    </ul>
<ul class="reviews-pagination"> <li class="reviews-pagination-item">

	<?
	$bFirst = true;
	$bPoints = false;
	do
	{
		if ($arResult["nStartPage"] <= 2 || $arResult["nEndPage"]-$arResult["nStartPage"] <= 1 || abs($arResult['nStartPage']-$arResult["NavPageNomer"])<=2)
		{

			if ($arResult["nStartPage"] == $arResult["NavPageNomer"]):
	?>
        <li class="reviews-pagination-item">		<a nohref class="active" class="nav-current-page"><?=$arResult["nStartPage"]?></a></li>
	<?
			elseif($arResult["nStartPage"] == 1 && $arResult["bSavePage"] == false):
	?> <li class="reviews-pagination-item">

			<a href="<?=$arResult["sUrlPath"]?><?=$strNavQueryStringFull?>"><?=$arResult["nStartPage"]?></a></li>
	<?
			else:
	?> <li class="reviews-pagination-item">
                <a href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=$arResult["nStartPage"]?>"><?=$arResult["nStartPage"]?></a> </li>
	<?
			endif;
			$bFirst = false;
			$bPoints = true;
		}
		else
		{
			if ($bPoints)
			{
	?>...<?
				$bPoints = false;
			}
		}
		$arResult["nStartPage"]++;
	} while($arResult["nStartPage"] <= $arResult["nEndPage"]);
}

if ($arResult["bShowAll"]):
	if ($arResult["NavShowAll"]):
?>
		<a class="nav-page-pagen" href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>SHOWALL_<?=$arResult["NavNum"]?>=0"><?=GetMessage("nav_paged")?></a>
<?
	else:
?>
		<a class="nav-page-all" href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>SHOWALL_<?=$arResult["NavNum"]?>=1"><?=GetMessage("nav_all")?></a>
<?
	endif;
endif;
?>
    </ul>

<?CJSCore::Init();?>
<script type="text/javascript">
	BX.bind(document, "keydown", function (event) {

		event = event || window.event;
		if (!event.ctrlKey)
			return;

		var target = event.target || event.srcElement;
		if (target && target.nodeName && (target.nodeName.toUpperCase() == "INPUT" || target.nodeName.toUpperCase() == "TEXTAREA"))
			return;

		var key = (event.keyCode ? event.keyCode : (event.which ? event.which : null));
		if (!key)
			return;

		var link = null;
		if (key == 39)
			link = BX('<?=$ClientID?>_next_page');
		else if (key == 37)
			link = BX('<?=$ClientID?>_previous_page');

		if (link && link.href)
			document.location = link.href;
	});
</script>