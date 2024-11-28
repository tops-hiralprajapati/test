<?php

namespace Tops\NeweggApi;

use Tops\NeweggApi\BaseApi;

class ReportApi extends BaseApi
{
    // Endpoint URLs for report-related actions
    protected $submitReportUrl    = "/reportmgmt/report/submitrequest";
    protected $getReportStatusUrl = "/reportmgmt/report/status";
    protected $getReportResultUrl = "/reportmgmt/report/result";

    /**
     * Submit a report request to the API.
     *
     * This function sends a POST request to the `submitReportUrl` with the provided request data and parameters.
     *
     * @param array $reqData The data to be sent with the request.
     * @param array $params Optional additional query parameters to be appended to the URL.
     * @return array The response from the API request (success or error).
     * @author Hiral Prajapati <hiralprajapati@topsinfosolutions.com> | 28-11-2024
     * About more Ref :- https://developer.newegg.com/newegg_marketplace_api/reports_management/submit_report_request/
    */
    public function submitReport($reqData = [], $params = [])
    {
        return $this->makeRequest($this->submitReportUrl, 'POST', $reqData, $params);
    }

    /**
     * Get the status of a report from the API.
     *
     * This function sends a PUT request to the `getReportStatusUrl` with the provided request data and parameters.
     *
     * @param array $reqData The data to be sent with the request.
     * @param array $params Optional additional query parameters to be appended to the URL.
     * @return array The response from the API request (status information).
     * @author Hiral Prajapati <hiralprajapati@topsinfosolutions.com> | 28-11-2024
     * About more Ref :- https://developer.newegg.com/newegg_marketplace_api/reports_management/get_report_status/
    */
    public function getReportStatus($reqData = [], $params = [])
    {
        return $this->makeRequest($this->getReportStatusUrl, 'PUT', $reqData, $params);
    }

    /**
     * Get the result of a report from the API.
     *
     * This function sends a PUT request to the `getReportResultUrl` with the provided request data and parameters.
     *
     * @param array $reqData The data to be sent with the request.
     * @param array $params Optional additional query parameters to be appended to the URL.
     * @return array The response from the API request (report results).
     * @author Hiral Prajapati <hiralprajapati@topsinfosolutions.com> | 28-11-2024
     * About more Ref :- https://developer.newegg.com/newegg_marketplace_api/reports_management/get_report_result/
    */
    public function getReportResult($reqData = [], $params = [])
    {
        return $this->makeRequest($this->getReportResultUrl, 'PUT', $reqData, $params);
    }
}
