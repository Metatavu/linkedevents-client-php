# KeywordSet

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Unique identifier for this keyword_set. These should be URIs identifying the source and the keyword_set itself, and preferably also well formed http-URLs pointing to more information about the keyword. | 
**name** | [**\Metatavu\LinkedEvents\Model\KeywordSetName**](KeywordSetName.md) |  | [optional] 
**originId** | **string** | Set identifier in the originating system, if any | [optional] 
**createdTime** | [**\DateTime**](\DateTime.md) | Time when this keyword_set was created (ISO 8601) | [optional] 
**lastModifiedTime** | [**\DateTime**](\DateTime.md) | Time when this keyword_set was last modified (ISO 8601) | [optional] 
**dataSource** | **string** | Unique identifier (URI)for the system where this keyword_set originated, if any | [optional] 
**lastModifiedBy** | **string** | FIXME(verify) Which API user most recently edited this keyword | [optional] 
**usage** | **string** | Usage type for this keyword_set. These are allow UIs to show the set in appropriate place. FIXME: set of types is not finalized by any stretch | [optional] 
**organization** | **string** | Organization that has defined this keyword_set | [optional] 
**keywords** | [**\Metatavu\LinkedEvents\Model\Keyword[]**](Keyword.md) | Keywords that belong to this keyword_set | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


