# CollaboratorFieldsRequestDTO

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**email** | **string** | The unique email of the contract collaborator. Deprecated: Will be removed in v2.0.0 | [optional] 
**identity_fields** | [**\Swagger\Client\Model\CreateCollaboratorIdentityFieldV1DTO[]**](CreateCollaboratorIdentityFieldV1DTO.md) | The identity fields of the contract collaborator. | 
**inviter_id** | **int** | The unique Id of the user who is inviting the collaborator to the contract. | 
**role** | **string[]** | The role of contract collaborator. | 
**side** | **string** | The side of contract collaborator. | 
**signatory_id** | **int** | The unique Id of the contract signatory who is going to sign the contract on behalf of the party / company. | [optional] 
**user_id** | **int** | The unique Id of the contract collaborator you are adding to the contract. | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

