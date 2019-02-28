# DomainDetail

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**domain** | **string** | Name of selected domain. | 
**default_domain** | **bool** | True, if domain is used as default. Otherwise, false, | 
**spf** | **bool** | True, if SPF record is verified | 
**dkim** | **bool** | True, if DKIM record is verified | 
**mx** | **bool** | True, if MX record is verified | 
**dmarc** | **bool** |  | 
**is_rewrite_domain_valid** | **bool** | True, if tracking CNAME record is verified | 
**verify** | **bool** | True, if verification is available | 
**type** | **string** |  | 
**tracking_status** | **string** | 0 - Validated successfully, 1 - NotValidated , 2 - Invalid, 3 - Broken (tracking was frequnetly verfied in given period and still is invalid). For statuses: 0, 1, 3 tracking will be verified in normal periods. For status 2 tracking will be verified in high frequent periods. | 
**certificate_status** | **string** |  | 
**certificate_validation_error** | **string** |  | 
**tracking_type_user_request** | **string** |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


