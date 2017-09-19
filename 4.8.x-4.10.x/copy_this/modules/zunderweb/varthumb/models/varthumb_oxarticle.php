<?php
class varthumb_oxarticle extends varthumb_oxarticle_parent
{
    public function getThumbnailUrl($bSsl = null)
    {
        $sQuery = parse_url(str_replace('amp;', '&', $this->getLink()), PHP_URL_QUERY);
        $aParams = array();
        $sVarSelIdParameter = array();
        parse_str($sQuery, $aParams);
        if ($sVarSelIdParameter = $aParams['varselid']){
            $oProduct = oxnew('oxarticle');
            if ($oProduct->load($this->getId())){
                $aVariantSelections = $oProduct->getVariantSelections($sVarSelIdParameter);
                if ($aVariantSelections && $aVariantSelections['oActiveVariant']) {
                    if ($oVariant = $aVariantSelections['oActiveVariant']){
                        $sOxid = $oVariant->getId();
                        $oPictureProduct = oxnew('oxarticle');
                        if ($oPictureProduct->load($sOxid)){
                            return $oPictureProduct->getThumbnailUrl($bSsl);
                        }
                    }
                }
            }
        }
        return parent::getThumbnailUrl($bSsl);
    }
}