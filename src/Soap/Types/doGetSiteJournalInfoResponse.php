<?php

namespace Ircykk\AllegroApi;

class doGetSiteJournalInfoResponse
{

    /**
     * @var SiteJournalInfo $siteJournalInfo
     */
    protected $siteJournalInfo = null;

    /**
     * @param SiteJournalInfo $siteJournalInfo
     */
    public function __construct($siteJournalInfo = null)
    {
      $this->siteJournalInfo = $siteJournalInfo;
    }

    /**
     * @return SiteJournalInfo
     */
    public function getSiteJournalInfo()
    {
      return $this->siteJournalInfo;
    }

    /**
     * @param SiteJournalInfo $siteJournalInfo
     * @return \Ircykk\AllegroApi\doGetSiteJournalInfoResponse
     */
    public function setSiteJournalInfo($siteJournalInfo)
    {
      $this->siteJournalInfo = $siteJournalInfo;
      return $this;
    }

}
