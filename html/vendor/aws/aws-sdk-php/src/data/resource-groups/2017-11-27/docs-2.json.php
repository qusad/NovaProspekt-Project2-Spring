<?php
// This file was auto-generated from sdk-root/src/data/resource-groups/2017-11-27/docs-2.json
return [ 'version' => '2.0', 'service' => '<fullname>AWS Resource Groups</fullname> <p>AWS Resource Groups lets you organize AWS resources such as Amazon EC2 instances, Amazon Relational Database Service databases, and Amazon S3 buckets into groups using criteria that you define as tags. A resource group is a collection of resources that match the resource types specified in a query, and share one or more tags or portions of tags. You can create a group of resources based on their roles in your cloud infrastructure, lifecycle stages, regions, application layers, or virtually any criteria. Resource groups enable you to automate management tasks, such as those in AWS Systems Manager Automation documents, on tag-related resources in AWS Systems Manager. Groups of tagged resources also let you quickly view a custom console in AWS Systems Manager that shows AWS Config compliance and other monitoring data about member resources.</p> <p>To create a resource group, build a resource query, and specify tags that identify the criteria that members of the group have in common. Tags are key-value pairs.</p> <p>For more information about Resource Groups, see the <a href="https://docs.aws.amazon.com/ARG/latest/userguide/welcome.html">AWS Resource Groups User Guide</a>.</p> <p>AWS Resource Groups uses a REST-compliant API that you can use to perform the following types of operations.</p> <ul> <li> <p>Create, Read, Update, and Delete (CRUD) operations on resource groups and resource query entities</p> </li> <li> <p>Applying, editing, and removing tags from resource groups</p> </li> <li> <p>Resolving resource group member ARNs so they can be returned as search results</p> </li> <li> <p>Getting data about resources that are members of a group</p> </li> <li> <p>Searching AWS resources based on a resource query</p> </li> </ul>', 'operations' => [ 'CreateGroup' => '<p>Creates a group with a specified name, description, and resource query.</p>', 'DeleteGroup' => '<p>Deletes a specified resource group. Deleting a resource group does not delete resources that are members of the group; it only deletes the group structure.</p>', 'GetGroup' => '<p>Returns information about a specified resource group.</p>', 'GetGroupQuery' => '<p>Returns the resource query associated with the specified resource group.</p>', 'GetTags' => '<p>Returns a list of tags that are associated with a resource group, specified by an ARN.</p>', 'ListGroupResources' => '<p>Returns a list of ARNs of resources that are members of a specified resource group.</p>', 'ListGroups' => '<p>Returns a list of existing resource groups in your account.</p>', 'SearchResources' => '<p>Returns a list of AWS resource identifiers that matches a specified query. The query uses the same format as a resource query in a CreateGroup or UpdateGroupQuery operation.</p>', 'Tag' => '<p>Adds tags to a resource group with the specified ARN. Existing tags on a resource group are not changed if they are not specified in the request parameters.</p>', 'Untag' => '<p>Deletes specified tags from a specified resource.</p>', 'UpdateGroup' => '<p>Updates an existing group with a new or changed description. You cannot update the name of a resource group.</p>', 'UpdateGroupQuery' => '<p>Updates the resource query of a group.</p>', ], 'shapes' => [ 'BadRequestException' => [ 'base' => '<p>The request does not comply with validation rules that are defined for the request parameters.</p>', 'refs' => [], ], 'CreateGroupInput' => [ 'base' => NULL, 'refs' => [], ], 'CreateGroupOutput' => [ 'base' => NULL, 'refs' => [], ], 'DeleteGroupInput' => [ 'base' => NULL, 'refs' => [], ], 'DeleteGroupOutput' => [ 'base' => NULL, 'refs' => [], ], 'ErrorMessage' => [ 'base' => NULL, 'refs' => [ 'BadRequestException$Message' => NULL, 'ForbiddenException$Message' => NULL, 'InternalServerErrorException$Message' => NULL, 'MethodNotAllowedException$Message' => NULL, 'NotFoundException$Message' => NULL, 'TooManyRequestsException$Message' => NULL, 'UnauthorizedException$Message' => NULL, ], ], 'ForbiddenException' => [ 'base' => '<p>The caller is not authorized to make the request.</p>', 'refs' => [], ], 'GetGroupInput' => [ 'base' => NULL, 'refs' => [], ], 'GetGroupOutput' => [ 'base' => NULL, 'refs' => [], ], 'GetGroupQueryInput' => [ 'base' => NULL, 'refs' => [], ], 'GetGroupQueryOutput' => [ 'base' => NULL, 'refs' => [], ], 'GetTagsInput' => [ 'base' => NULL, 'refs' => [], ], 'GetTagsOutput' => [ 'base' => NULL, 'refs' => [], ], 'Group' => [ 'base' => '<p>A resource group.</p>', 'refs' => [ 'CreateGroupOutput$Group' => '<p>A full description of the resource group after it is created.</p>', 'DeleteGroupOutput$Group' => '<p>A full description of the deleted resource group.</p>', 'GetGroupOutput$Group' => '<p>A full description of the resource group.</p>', 'GroupList$member' => NULL, 'UpdateGroupOutput$Group' => '<p>The full description of the resource group after it has been updated.</p>', ], ], 'GroupArn' => [ 'base' => NULL, 'refs' => [ 'GetTagsInput$Arn' => '<p>The ARN of the resource group for which you want a list of tags. The resource must exist within the account you are using.</p>', 'GetTagsOutput$Arn' => '<p>The ARN of the tagged resource group.</p>', 'Group$GroupArn' => '<p>The ARN of a resource group.</p>', 'GroupIdentifier$GroupArn' => '<p>The ARN of a resource group.</p>', 'TagInput$Arn' => '<p>The ARN of the resource to which to add tags.</p>', 'TagOutput$Arn' => '<p>The ARN of the tagged resource.</p>', 'UntagInput$Arn' => '<p>The ARN of the resource from which to remove tags.</p>', 'UntagOutput$Arn' => '<p>The ARN of the resource from which tags have been removed.</p>', ], ], 'GroupDescription' => [ 'base' => NULL, 'refs' => [ 'CreateGroupInput$Description' => '<p>The description of the resource group. Descriptions can have a maximum of 511 characters, including letters, numbers, hyphens, underscores, punctuation, and spaces.</p>', 'Group$Description' => '<p>The description of the resource group.</p>', 'UpdateGroupInput$Description' => '<p>The description of the resource group. Descriptions can have a maximum of 511 characters, including letters, numbers, hyphens, underscores, punctuation, and spaces.</p>', ], ], 'GroupFilter' => [ 'base' => '<p>A filter name and value pair that is used to obtain more specific results from a list of groups.</p>', 'refs' => [ 'GroupFilterList$member' => NULL, ], ], 'GroupFilterList' => [ 'base' => NULL, 'refs' => [ 'ListGroupsInput$Filters' => '<p>Filters, formatted as GroupFilter objects, that you want to apply to a ListGroups operation.</p> <ul> <li> <p> <code>resource-type</code> - Filter groups by resource type. Specify up to five resource types in the format AWS::ServiceCode::ResourceType. For example, AWS::EC2::Instance, or AWS::S3::Bucket.</p> </li> </ul>', ], ], 'GroupFilterName' => [ 'base' => NULL, 'refs' => [ 'GroupFilter$Name' => '<p>The name of the filter. Filter names are case-sensitive.</p>', ], ], 'GroupFilterValue' => [ 'base' => NULL, 'refs' => [ 'GroupFilterValues$member' => NULL, ], ], 'GroupFilterValues' => [ 'base' => NULL, 'refs' => [ 'GroupFilter$Values' => '<p>One or more filter values. Allowed filter values vary by group filter name, and are case-sensitive.</p>', ], ], 'GroupIdentifier' => [ 'base' => '<p>The ARN and group name of a group.</p>', 'refs' => [ 'GroupIdentifierList$member' => NULL, ], ], 'GroupIdentifierList' => [ 'base' => NULL, 'refs' => [ 'ListGroupsOutput$GroupIdentifiers' => '<p>A list of GroupIdentifier objects. Each identifier is an object that contains both the GroupName and the GroupArn.</p>', ], ], 'GroupList' => [ 'base' => NULL, 'refs' => [ 'ListGroupsOutput$Groups' => '<p>A list of resource groups.</p>', ], ], 'GroupName' => [ 'base' => NULL, 'refs' => [ 'CreateGroupInput$Name' => '<p>The name of the group, which is the identifier of the group in other operations. A resource group name cannot be updated after it is created. A resource group name can have a maximum of 128 characters, including letters, numbers, hyphens, dots, and underscores. The name cannot start with <code>AWS</code> or <code>aws</code>; these are reserved. A resource group name must be unique within your account.</p>', 'DeleteGroupInput$GroupName' => '<p>The name of the resource group to delete.</p>', 'GetGroupInput$GroupName' => '<p>The name of the resource group.</p>', 'GetGroupQueryInput$GroupName' => '<p>The name of the resource group.</p>', 'Group$Name' => '<p>The name of a resource group.</p>', 'GroupIdentifier$GroupName' => '<p>The name of a resource group.</p>', 'GroupQuery$GroupName' => '<p>The name of a resource group that is associated with a specific resource query.</p>', 'ListGroupResourcesInput$GroupName' => '<p>The name of the resource group.</p>', 'UpdateGroupInput$GroupName' => '<p>The name of the resource group for which you want to update its description.</p>', 'UpdateGroupQueryInput$GroupName' => '<p>The name of the resource group for which you want to edit the query.</p>', ], ], 'GroupQuery' => [ 'base' => '<p>The underlying resource query of a resource group. Resources that match query results are part of the group.</p>', 'refs' => [ 'GetGroupQueryOutput$GroupQuery' => '<p>The resource query associated with the specified group.</p>', 'UpdateGroupQueryOutput$GroupQuery' => '<p>The resource query associated with the resource group after the update.</p>', ], ], 'InternalServerErrorException' => [ 'base' => '<p>An internal error occurred while processing the request.</p>', 'refs' => [], ], 'ListGroupResourcesInput' => [ 'base' => NULL, 'refs' => [], ], 'ListGroupResourcesOutput' => [ 'base' => NULL, 'refs' => [], ], 'ListGroupsInput' => [ 'base' => NULL, 'refs' => [], ], 'ListGroupsOutput' => [ 'base' => NULL, 'refs' => [], ], 'MaxResults' => [ 'base' => NULL, 'refs' => [ 'ListGroupResourcesInput$MaxResults' => '<p>The maximum number of group member ARNs that are returned in a single call by ListGroupResources, in paginated output. By default, this number is 50.</p>', 'ListGroupsInput$MaxResults' => '<p>The maximum number of resource group results that are returned by ListGroups in paginated output. By default, this number is 50.</p>', 'SearchResourcesInput$MaxResults' => '<p>The maximum number of group member ARNs returned by <code>SearchResources</code> in paginated output. By default, this number is 50.</p>', ], ], 'MethodNotAllowedException' => [ 'base' => '<p>The request uses an HTTP method which is not allowed for the specified resource.</p>', 'refs' => [], ], 'NextToken' => [ 'base' => NULL, 'refs' => [ 'ListGroupResourcesInput$NextToken' => '<p>The NextToken value that is returned in a paginated ListGroupResources request. To get the next page of results, run the call again, add the NextToken parameter, and specify the NextToken value.</p>', 'ListGroupResourcesOutput$NextToken' => '<p>The NextToken value to include in a subsequent <code>ListGroupResources</code> request, to get more results.</p>', 'ListGroupsInput$NextToken' => '<p>The NextToken value that is returned in a paginated <code>ListGroups</code> request. To get the next page of results, run the call again, add the NextToken parameter, and specify the NextToken value.</p>', 'ListGroupsOutput$NextToken' => '<p>The NextToken value to include in a subsequent <code>ListGroups</code> request, to get more results.</p>', 'SearchResourcesInput$NextToken' => '<p>The NextToken value that is returned in a paginated <code>SearchResources</code> request. To get the next page of results, run the call again, add the NextToken parameter, and specify the NextToken value.</p>', 'SearchResourcesOutput$NextToken' => '<p>The NextToken value to include in a subsequent <code>SearchResources</code> request, to get more results.</p>', ], ], 'NotFoundException' => [ 'base' => '<p>One or more resources specified in the request do not exist.</p>', 'refs' => [], ], 'Query' => [ 'base' => NULL, 'refs' => [ 'ResourceQuery$Query' => '<p>The query that defines a group or a search.</p>', ], ], 'QueryError' => [ 'base' => '<p>A two-part error structure that can occur in <code>ListGroupResources</code> or <code>SearchResources</code> operations on CloudFormation stack-based queries. The error occurs if the CloudFormation stack on which the query is based either does not exist, or has a status that renders the stack inactive. A <code>QueryError</code> occurrence does not necessarily mean that AWS Resource Groups could not complete the operation, but the resulting group might have no member resources.</p>', 'refs' => [ 'QueryErrorList$member' => NULL, ], ], 'QueryErrorCode' => [ 'base' => NULL, 'refs' => [ 'QueryError$ErrorCode' => '<p>Possible values are <code>CLOUDFORMATION_STACK_INACTIVE</code> and <code>CLOUDFORMATION_STACK_NOT_EXISTING</code>.</p>', ], ], 'QueryErrorList' => [ 'base' => NULL, 'refs' => [ 'ListGroupResourcesOutput$QueryErrors' => '<p>A list of <code>QueryError</code> objects. Each error is an object that contains <code>ErrorCode</code> and <code>Message</code> structures. Possible values for <code>ErrorCode</code> are <code>CLOUDFORMATION_STACK_INACTIVE</code> and <code>CLOUDFORMATION_STACK_NOT_EXISTING</code>.</p>', 'SearchResourcesOutput$QueryErrors' => '<p>A list of <code>QueryError</code> objects. Each error is an object that contains <code>ErrorCode</code> and <code>Message</code> structures. Possible values for <code>ErrorCode</code> are <code>CLOUDFORMATION_STACK_INACTIVE</code> and <code>CLOUDFORMATION_STACK_NOT_EXISTING</code>.</p>', ], ], 'QueryErrorMessage' => [ 'base' => NULL, 'refs' => [ 'QueryError$Message' => '<p>A message that explains the <code>ErrorCode</code> value. Messages might state that the specified CloudFormation stack does not exist (or no longer exists). For <code>CLOUDFORMATION_STACK_INACTIVE</code>, the message typically states that the CloudFormation stack has a status that is not (or no longer) active, such as <code>CREATE_FAILED</code>.</p>', ], ], 'QueryType' => [ 'base' => NULL, 'refs' => [ 'ResourceQuery$Type' => '<p>The type of the query. The valid values in this release are <code>TAG_FILTERS_1_0</code> and <code>CLOUDFORMATION_STACK_1_0</code>.</p> <p> <i> <code>TAG_FILTERS_1_0:</code> </i> A JSON syntax that lets you specify a collection of simple tag filters for resource types and tags, as supported by the AWS Tagging API <a href="https://docs.aws.amazon.com/resourcegroupstagging/latest/APIReference/API_GetResources.html">GetResources</a> operation. If you specify more than one tag key, only resources that match all tag keys, and at least one value of each specified tag key, are returned in your query. If you specify more than one value for a tag key, a resource matches the filter if it has a tag key value that matches <i>any</i> of the specified values.</p> <p>For example, consider the following sample query for resources that have two tags, <code>Stage</code> and <code>Version</code>, with two values each. (<code>[{"Key":"Stage","Values":["Test","Deploy"]},{"Key":"Version","Values":["1","2"]}]</code>) The results of this query might include the following.</p> <ul> <li> <p>An EC2 instance that has the following two tags: <code>{"Key":"Stage","Value":"Deploy"}</code>, and <code>{"Key":"Version","Value":"2"}</code> </p> </li> <li> <p>An S3 bucket that has the following two tags: {"Key":"Stage","Value":"Test"}, and {"Key":"Version","Value":"1"}</p> </li> </ul> <p>The query would not return the following results, however. The following EC2 instance does not have all tag keys specified in the filter, so it is rejected. The RDS database has all of the tag keys, but no values that match at least one of the specified tag key values in the filter.</p> <ul> <li> <p>An EC2 instance that has only the following tag: <code>{"Key":"Stage","Value":"Deploy"}</code>.</p> </li> <li> <p>An RDS database that has the following two tags: <code>{"Key":"Stage","Value":"Archived"}</code>, and <code>{"Key":"Version","Value":"4"}</code> </p> </li> </ul> <p> <i> <code>CLOUDFORMATION_STACK_1_0:</code> </i> A JSON syntax that lets you specify a CloudFormation stack ARN.</p>', ], ], 'ResourceArn' => [ 'base' => NULL, 'refs' => [ 'ResourceIdentifier$ResourceArn' => '<p>The ARN of a resource.</p>', ], ], 'ResourceFilter' => [ 'base' => '<p>A filter name and value pair that is used to obtain more specific results from a list of resources.</p>', 'refs' => [ 'ResourceFilterList$member' => NULL, ], ], 'ResourceFilterList' => [ 'base' => NULL, 'refs' => [ 'ListGroupResourcesInput$Filters' => '<p>Filters, formatted as ResourceFilter objects, that you want to apply to a ListGroupResources operation.</p> <ul> <li> <p> <code>resource-type</code> - Filter resources by their type. Specify up to five resource types in the format AWS::ServiceCode::ResourceType. For example, AWS::EC2::Instance, or AWS::S3::Bucket.</p> </li> </ul>', ], ], 'ResourceFilterName' => [ 'base' => NULL, 'refs' => [ 'ResourceFilter$Name' => '<p>The name of the filter. Filter names are case-sensitive.</p>', ], ], 'ResourceFilterValue' => [ 'base' => NULL, 'refs' => [ 'ResourceFilterValues$member' => NULL, ], ], 'ResourceFilterValues' => [ 'base' => NULL, 'refs' => [ 'ResourceFilter$Values' => '<p>One or more filter values. Allowed filter values vary by resource filter name, and are case-sensitive.</p>', ], ], 'ResourceIdentifier' => [ 'base' => '<p>The ARN of a resource, and its resource type.</p>', 'refs' => [ 'ResourceIdentifierList$member' => NULL, ], ], 'ResourceIdentifierList' => [ 'base' => NULL, 'refs' => [ 'ListGroupResourcesOutput$ResourceIdentifiers' => '<p>The ARNs and resource types of resources that are members of the group that you specified.</p>', 'SearchResourcesOutput$ResourceIdentifiers' => '<p>The ARNs and resource types of resources that are members of the group that you specified.</p>', ], ], 'ResourceQuery' => [ 'base' => '<p>The query that is used to define a resource group or a search for resources.</p>', 'refs' => [ 'CreateGroupInput$ResourceQuery' => '<p>The resource query that determines which AWS resources are members of this group.</p>', 'CreateGroupOutput$ResourceQuery' => '<p>The resource query associated with the group.</p>', 'GroupQuery$ResourceQuery' => '<p>The resource query which determines which AWS resources are members of the associated resource group.</p>', 'SearchResourcesInput$ResourceQuery' => '<p>The search query, using the same formats that are supported for resource group definition.</p>', 'UpdateGroupQueryInput$ResourceQuery' => '<p>The resource query that determines which AWS resources are members of the resource group.</p>', ], ], 'ResourceType' => [ 'base' => NULL, 'refs' => [ 'ResourceIdentifier$ResourceType' => '<p>The resource type of a resource, such as <code>AWS::EC2::Instance</code>.</p>', ], ], 'SearchResourcesInput' => [ 'base' => NULL, 'refs' => [], ], 'SearchResourcesOutput' => [ 'base' => NULL, 'refs' => [], ], 'TagInput' => [ 'base' => NULL, 'refs' => [], ], 'TagKey' => [ 'base' => NULL, 'refs' => [ 'TagKeyList$member' => NULL, 'Tags$key' => NULL, ], ], 'TagKeyList' => [ 'base' => NULL, 'refs' => [ 'UntagInput$Keys' => '<p>The keys of the tags to be removed.</p>', 'UntagOutput$Keys' => '<p>The keys of tags that have been removed.</p>', ], ], 'TagOutput' => [ 'base' => NULL, 'refs' => [], ], 'TagValue' => [ 'base' => NULL, 'refs' => [ 'Tags$value' => NULL, ], ], 'Tags' => [ 'base' => NULL, 'refs' => [ 'CreateGroupInput$Tags' => '<p>The tags to add to the group. A tag is a string-to-string map of key-value pairs. Tag keys can have a maximum character length of 128 characters, and tag values can have a maximum length of 256 characters.</p>', 'CreateGroupOutput$Tags' => '<p>The tags associated with the group.</p>', 'GetTagsOutput$Tags' => '<p>The tags associated with the specified resource group.</p>', 'TagInput$Tags' => '<p>The tags to add to the specified resource. A tag is a string-to-string map of key-value pairs. Tag keys can have a maximum character length of 128 characters, and tag values can have a maximum length of 256 characters.</p>', 'TagOutput$Tags' => '<p>The tags that have been added to the specified resource.</p>', ], ], 'TooManyRequestsException' => [ 'base' => '<p>The caller has exceeded throttling limits.</p>', 'refs' => [], ], 'UnauthorizedException' => [ 'base' => '<p>The request has not been applied because it lacks valid authentication credentials for the target resource.</p>', 'refs' => [], ], 'UntagInput' => [ 'base' => NULL, 'refs' => [], ], 'UntagOutput' => [ 'base' => NULL, 'refs' => [], ], 'UpdateGroupInput' => [ 'base' => NULL, 'refs' => [], ], 'UpdateGroupOutput' => [ 'base' => NULL, 'refs' => [], ], 'UpdateGroupQueryInput' => [ 'base' => NULL, 'refs' => [], ], 'UpdateGroupQueryOutput' => [ 'base' => NULL, 'refs' => [], ], ],];