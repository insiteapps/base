<?php
    /**
     *
     * @copyright (c) 2017 Insite Apps - http://www.insiteapps.co.za
     * @package       insiteapps
     * @author        Patrick Chitovoro  <patrick@insiteapps.co.za>
     * All rights reserved. No warranty, explicit or implicit, provided.
     *
     * NOTICE:  All information contained herein is, and remains the property of Insite Apps and its suppliers,  if
     *     any.
     * The intellectual and technical concepts contained herein are proprietary to Insite Apps and its suppliers and
     *     may be covered by South African. and Foreign Patents, patents in process, and are protected by trade secret
     *     or copyright law. Dissemination of this information or reproduction of this material is strictly forbidden
     *     unless prior written permission is obtained from Insite Apps.
     *
     * There is no freedom to use, share or change this file.
     *
     *
     */

    namespace InsiteApps\AppBase\Utli;

    use InsiteApps\Forms\CountryDropdownField;
    use SilverStripe\CMS\Model\SiteTree;
    use SilverStripe\Core\Injector\Injectable;
    use SilverStripe\i18n\i18n;
    use SilverStripe\Security\Security;

    class EnquiryManager
    {
        use Injectable;

        const THANK_YOU_ON_COMPLETE = "Thank you for you Enquiry.";

        public function __construct()
        {
            parent::__construct();

        }

        public static function getMessages($code)
        {

        }


    }
