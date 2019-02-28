# BodyPart

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**content_type** | **string** | Type of the body part (for example &#39;text/html&#39;) | 
**content** | **string** | Actual content of the body part | 
**charset** | **string** |  | 
**encoding** | **string** | 0 for None, 1 for Raw7Bit, 2 for Raw8Bit, 3 for QuotedPrintable, 4 for Base64 (Default), 5 for Uue note that you can also provide the text version such as \&quot;Raw7Bit\&quot; for value 1. NOTE: Base64 or QuotedPrintable is recommended if you are validating your domain(s) with DKIM. | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


