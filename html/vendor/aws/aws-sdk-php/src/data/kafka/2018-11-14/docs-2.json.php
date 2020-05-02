<?php
// This file was auto-generated from sdk-root/src/data/kafka/2018-11-14/docs-2.json
return [ 'version' => '2.0', 'service' => '<p>The operations for managing an Amazon MSK cluster.</p>', 'operations' => [ 'CreateCluster' => '<p>Creates a new MSK cluster.</p>', 'CreateConfiguration' => '<p>Creates a new MSK configuration.</p>', 'DeleteCluster' => '<p>Deletes the MSK cluster specified by the Amazon Resource Name (ARN) in the request.</p>', 'DescribeCluster' => '<p>Returns a description of the MSK cluster whose Amazon Resource Name (ARN) is specified in the request.</p>', 'DescribeClusterOperation' => '<p>Returns a description of the cluster operation specified by the ARN.</p>', 'DescribeConfiguration' => '<p>Returns a description of this MSK configuration.</p>', 'DescribeConfigurationRevision' => '<p>Returns a description of this revision of the configuration.</p>', 'GetBootstrapBrokers' => '<p>A list of brokers that a client application can use to bootstrap.</p>', 'ListClusterOperations' => '<p>Returns a list of all the operations that have been performed on the specified MSK cluster.</p>', 'ListClusters' => '<p>Returns a list of all the MSK clusters in the current Region.</p>', 'ListConfigurationRevisions' => '<p>Returns a list of all the revisions of an MSK configuration.</p>', 'ListConfigurations' => '<p>Returns a list of all the MSK configurations in this Region.</p>', 'ListKafkaVersions' => '<p>Returns a list of Kafka versions.</p>', 'ListNodes' => '<p>Returns a list of the broker nodes in the cluster.</p>', 'ListTagsForResource' => '<p>Returns a list of the tags associated with the specified resource.</p>', 'TagResource' => '<p>Adds tags to the specified MSK resource.</p>', 'UntagResource' => '<p>Removes the tags associated with the keys that are provided in the query.</p>', 'UpdateBrokerCount' => '<p>Updates the number of broker nodes in the cluster. You can use this operation to increase the number of brokers in an existing cluster. You can\'t decrease the number of brokers.</p>', 'UpdateBrokerStorage' => '<p>Updates the EBS storage associated with MSK brokers.</p>', 'UpdateClusterConfiguration' => '<p>Updates the cluster with the configuration that is specified in the request body.</p>', 'UpdateMonitoring' => '<p>Updates the monitoring settings for the cluster. You can use this operation to specify which Apache Kafka metrics you want Amazon MSK to send to Amazon CloudWatch. You can also specify settings for open monitoring with Prometheus.</p>', ], 'shapes' => [ 'BadRequestException' => [ 'base' => '<p>Returns information about an error.</p>', 'refs' => [], ], 'BrokerAZDistribution' => [ 'base' => '<p>The distribution of broker nodes across Availability Zones. By default, broker nodes are distributed among the Availability Zones of your Region. Currently, the only supported value is DEFAULT. You can either specify this value explicitly or leave it out.</p>', 'refs' => [ 'BrokerNodeGroupInfo$BrokerAZDistribution' => '<p>The distribution of broker nodes across Availability Zones.</p>', ], ], 'BrokerEBSVolumeInfo' => [ 'base' => '<p>Specifies the EBS volume upgrade information. The broker identifier must be set to the keyword ALL. This means the changes apply to all the brokers in the cluster.</p>', 'refs' => [ '__listOfBrokerEBSVolumeInfo$member' => NULL, ], ], 'BrokerLogs' => [ 'base' => '<p>The broker logs configuration for this MSK cluster.</p>', 'refs' => [ 'LoggingInfo$BrokerLogs' => '<p>You can configure your MSK cluster to send broker logs to different destination types. This configuration specifies the details of these destinations.</p>', ], ], 'BrokerNodeGroupInfo' => [ 'base' => '<p>Describes the setup to be used for Kafka broker nodes in the cluster.</p>', 'refs' => [ 'ClusterInfo$BrokerNodeGroupInfo' => '<p>Information about the broker nodes.</p>', 'CreateClusterRequest$BrokerNodeGroupInfo' => '<p>Information about the broker nodes in the cluster.</p>', ], ], 'BrokerNodeInfo' => [ 'base' => '<p>BrokerNodeInfo</p>', 'refs' => [ 'NodeInfo$BrokerNodeInfo' => '<p>The broker node info.</p>', ], ], 'BrokerSoftwareInfo' => [ 'base' => '<p>Information about the current software installed on the cluster.</p>', 'refs' => [ 'BrokerNodeInfo$CurrentBrokerSoftwareInfo' => '<p>Information about the version of software currently deployed on the Kafka brokers in the cluster.</p>', 'ClusterInfo$CurrentBrokerSoftwareInfo' => '<p>Information about the version of software currently deployed on the Kafka brokers in the cluster.</p>', ], ], 'ClientAuthentication' => [ 'base' => '<p>Includes all client authentication information.</p>', 'refs' => [ 'ClusterInfo$ClientAuthentication' => '<p>Includes all client authentication information.</p>', 'CreateClusterRequest$ClientAuthentication' => '<p>Includes all client authentication related information.</p>', ], ], 'ClientBroker' => [ 'base' => '<p>Client-broker encryption in transit setting.</p>', 'refs' => [ 'EncryptionInTransit$ClientBroker' => '<p>Indicates the encryption setting for data in transit between clients and brokers. You must set it to one of the following values.</p> <p>TLS means that client-broker communication is enabled with TLS only.</p> <p>TLS_PLAINTEXT means that client-broker communication is enabled for both TLS-encrypted, as well as plaintext data.</p> <p>PLAINTEXT means that client-broker communication is enabled in plaintext only.</p> <p>The default value is TLS.</p>', ], ], 'CloudWatchLogs' => [ 'base' => '<p>Details of the CloudWatch Logs destination for broker logs.</p>', 'refs' => [ 'BrokerLogs$CloudWatchLogs' => '<p>Details of the CloudWatch Logs destination for broker logs.</p>', ], ], 'ClusterInfo' => [ 'base' => '<p>Returns information about a cluster.</p>', 'refs' => [ 'DescribeClusterResponse$ClusterInfo' => '<p>The cluster information.</p>', '__listOfClusterInfo$member' => NULL, ], ], 'ClusterOperationInfo' => [ 'base' => '<p>Returns information about a cluster operation.</p>', 'refs' => [ 'DescribeClusterOperationResponse$ClusterOperationInfo' => '<p>Cluster operation information</p>', '__listOfClusterOperationInfo$member' => NULL, ], ], 'ClusterState' => [ 'base' => '<p>The state of a Kafka cluster.</p>', 'refs' => [ 'ClusterInfo$State' => '<p>The state of the cluster. The possible states are CREATING, ACTIVE, and FAILED.</p>', 'CreateClusterResponse$State' => '<p>The state of the cluster. The possible states are CREATING, ACTIVE, and FAILED.</p>', 'DeleteClusterResponse$State' => '<p>The state of the cluster. The possible states are CREATING, ACTIVE, and FAILED.</p>', ], ], 'Configuration' => [ 'base' => '<p>Represents an MSK Configuration.</p>', 'refs' => [ '__listOfConfiguration$member' => NULL, ], ], 'ConfigurationInfo' => [ 'base' => '<p>Specifies the configuration to use for the brokers.</p>', 'refs' => [ 'CreateClusterRequest$ConfigurationInfo' => '<p>Represents the configuration that you want MSK to use for the cluster.</p>', 'MutableClusterInfo$ConfigurationInfo' => '<p>Information about the changes in the configuration of the brokers.</p>', 'UpdateClusterConfigurationRequest$ConfigurationInfo' => '<p>Represents the configuration that you want MSK to use for the cluster.</p>', ], ], 'ConfigurationRevision' => [ 'base' => '<p>Describes a configuration revision.</p>', 'refs' => [ 'Configuration$LatestRevision' => '<p>Latest revision of the configuration.</p>', 'CreateConfigurationResponse$LatestRevision' => '<p>Latest revision of the configuration.</p>', 'DescribeConfigurationResponse$LatestRevision' => '<p>Latest revision of the configuration.</p>', '__listOfConfigurationRevision$member' => NULL, ], ], 'ConflictException' => [ 'base' => '<p>Returns information about an error.</p>', 'refs' => [], ], 'CreateClusterRequest' => [ 'base' => '<p>Creates a cluster.</p>', 'refs' => [], ], 'CreateClusterResponse' => [ 'base' => '<p>Returns information about the created cluster.</p>', 'refs' => [], ], 'CreateConfigurationRequest' => [ 'base' => '<p>Request body for CreateConfiguration.</p>', 'refs' => [], ], 'CreateConfigurationResponse' => [ 'base' => '<p>Response body for CreateConfiguration</p>', 'refs' => [], ], 'DeleteClusterResponse' => [ 'base' => '<p>Returns information about the deleted cluster.</p>', 'refs' => [], ], 'DescribeClusterOperationResponse' => [ 'base' => '<p>Information about a cluster operation.</p>', 'refs' => [], ], 'DescribeClusterResponse' => [ 'base' => '<p>Returns information about a cluster.</p>', 'refs' => [], ], 'DescribeConfigurationResponse' => [ 'base' => '<p>Response body for DescribeConfiguration.</p>', 'refs' => [], ], 'DescribeConfigurationRevisionResponse' => [ 'base' => '<p>Response body for DescribeConfigurationRevision.</p>', 'refs' => [], ], 'EBSStorageInfo' => [ 'base' => '<p>Contains information about the EBS storage volumes attached to Kafka broker nodes.</p>', 'refs' => [ 'StorageInfo$EbsStorageInfo' => '<p>EBS volume information.</p>', ], ], 'EncryptionAtRest' => [ 'base' => '<p>The data-volume encryption details.</p>', 'refs' => [ 'EncryptionInfo$EncryptionAtRest' => '<p>The data-volume encryption details.</p>', ], ], 'EncryptionInTransit' => [ 'base' => '<p>The settings for encrypting data in transit.</p>', 'refs' => [ 'EncryptionInfo$EncryptionInTransit' => '<p>The details for encryption in transit.</p>', ], ], 'EncryptionInfo' => [ 'base' => '<p>Includes encryption-related information, such as the AWS KMS key used for encrypting data at rest and whether you want MSK to encrypt your data in transit.</p>', 'refs' => [ 'ClusterInfo$EncryptionInfo' => '<p>Includes all encryption-related information.</p>', 'CreateClusterRequest$EncryptionInfo' => '<p>Includes all encryption-related information.</p>', ], ], 'EnhancedMonitoring' => [ 'base' => '<p>Specifies which metrics are gathered for the MSK cluster. This property has three possible values: DEFAULT, PER_BROKER, and PER_TOPIC_PER_BROKER. For a list of the metrics associated with each of these three levels of monitoring, see <a href="https://docs.aws.amazon.com/msk/latest/developerguide/monitoring.html">Monitoring</a>.</p>', 'refs' => [ 'ClusterInfo$EnhancedMonitoring' => '<p>Specifies which metrics are gathered for the MSK cluster. This property has three possible values: DEFAULT, PER_BROKER, and PER_TOPIC_PER_BROKER. For a list of the metrics associated with each of these three levels of monitoring, see <a href="https://docs.aws.amazon.com/msk/latest/developerguide/monitoring.html">Monitoring</a>.</p>', 'CreateClusterRequest$EnhancedMonitoring' => '<p>Specifies the level of monitoring for the MSK cluster. The possible values are DEFAULT, PER_BROKER, and PER_TOPIC_PER_BROKER.</p>', 'MutableClusterInfo$EnhancedMonitoring' => '<p>Specifies which Apache Kafka metrics Amazon MSK gathers and sends to Amazon CloudWatch for this cluster.</p>', 'UpdateMonitoringRequest$EnhancedMonitoring' => '<p>Specifies which Apache Kafka metrics Amazon MSK gathers and sends to Amazon CloudWatch for this cluster.</p>', ], ], 'Error' => [ 'base' => '<p>Returns information about an error.</p>', 'refs' => [], ], 'ErrorInfo' => [ 'base' => '<p>Returns information about an error state of the cluster.</p>', 'refs' => [ 'ClusterOperationInfo$ErrorInfo' => '<p>Describes the error if the operation fails.</p>', ], ], 'Firehose' => [ 'base' => '<p>Firehose details for BrokerLogs.</p>', 'refs' => [ 'BrokerLogs$Firehose' => '<p>Details of the Kinesis Data Firehose delivery stream that is the destination for broker logs.</p>', ], ], 'ForbiddenException' => [ 'base' => '<p>Returns information about an error.</p>', 'refs' => [], ], 'GetBootstrapBrokersResponse' => [ 'base' => '<p>Returns a string containing one or more hostname:port pairs.</p>', 'refs' => [], ], 'InternalServerErrorException' => [ 'base' => '<p>Returns information about an error.</p>', 'refs' => [], ], 'JmxExporter' => [ 'base' => '<p>Indicates whether you want to enable or disable the JMX Exporter.</p>', 'refs' => [ 'Prometheus$JmxExporter' => '<p>Indicates whether you want to enable or disable the JMX Exporter.</p>', ], ], 'JmxExporterInfo' => [ 'base' => '<p>Indicates whether you want to enable or disable the JMX Exporter.</p>', 'refs' => [ 'PrometheusInfo$JmxExporter' => '<p>JMX Exporter settings.</p>', ], ], 'KafkaVersion' => [ 'base' => '<p>Information about a Kafka version.</p>', 'refs' => [ '__listOfKafkaVersion$member' => NULL, ], ], 'KafkaVersionStatus' => [ 'base' => '<p>The status of a Kafka version.</p>', 'refs' => [ 'KafkaVersion$Status' => '<p>The status of the Apache Kafka version.</p>', ], ], 'ListClusterOperationsResponse' => [ 'base' => '<p>The response contains an array containing cluster operation information and a next token if the response is truncated.</p>', 'refs' => [], ], 'ListClustersResponse' => [ 'base' => '<p>The response contains an array containing cluster information and a next token if the response is truncated.</p>', 'refs' => [], ], 'ListConfigurationRevisionsResponse' => [ 'base' => '<p>Information about revisions of an MSK configuration.</p>', 'refs' => [], ], 'ListConfigurationsResponse' => [ 'base' => '<p>The response contains an array of Configuration and a next token if the response is truncated.</p>', 'refs' => [], ], 'ListKafkaVersionsResponse' => [ 'base' => '<p>Response for ListKafkaVersions.</p>', 'refs' => [], ], 'ListNodesResponse' => [ 'base' => '<p>Information about nodes in the cluster.</p>', 'refs' => [], ], 'ListTagsForResourceResponse' => [ 'base' => '<p>Response of listing tags for a resource.</p>', 'refs' => [], ], 'LoggingInfo' => [ 'base' => '<p>You can configure your MSK cluster to send broker logs to different destination types. This is a container for the configuration details related to broker logs.</p>', 'refs' => [ 'ClusterInfo$LoggingInfo' => '<p>You can configure your MSK cluster to send broker logs to different destination types. This is a container for the configuration details related to broker logs.</p>', 'CreateClusterRequest$LoggingInfo' => '<p>LoggingInfo details.</p>', 'MutableClusterInfo$LoggingInfo' => '<p>LoggingInfo details.</p>', 'UpdateMonitoringRequest$LoggingInfo' => '<p>LoggingInfo details.</p>', ], ], 'MutableClusterInfo' => [ 'base' => '<p>Information about cluster attributes that can be updated via update APIs.</p>', 'refs' => [ 'ClusterOperationInfo$SourceClusterInfo' => '<p>Information about cluster attributes before a cluster is updated.</p>', 'ClusterOperationInfo$TargetClusterInfo' => '<p>Information about cluster attributes after a cluster is updated.</p>', ], ], 'NodeExporter' => [ 'base' => '<p>Indicates whether you want to enable or disable the Node Exporter.</p>', 'refs' => [ 'Prometheus$NodeExporter' => '<p>Indicates whether you want to enable or disable the Node Exporter.</p>', ], ], 'NodeExporterInfo' => [ 'base' => '<p>Indicates whether you want to enable or disable the Node Exporter.</p>', 'refs' => [ 'PrometheusInfo$NodeExporter' => '<p>Node Exporter settings.</p>', ], ], 'NodeInfo' => [ 'base' => '<p>The node information object.</p>', 'refs' => [ '__listOfNodeInfo$member' => NULL, ], ], 'NodeType' => [ 'base' => '<p>The broker or Zookeeper node.</p>', 'refs' => [ 'NodeInfo$NodeType' => '<p>The node type.</p>', ], ], 'NotFoundException' => [ 'base' => '<p>Returns information about an error.</p>', 'refs' => [], ], 'OpenMonitoring' => [ 'base' => '<p>JMX and Node monitoring for the MSK cluster.</p>', 'refs' => [ 'ClusterInfo$OpenMonitoring' => '<p>Settings for open monitoring using Prometheus.</p>', 'MutableClusterInfo$OpenMonitoring' => '<p>Settings for open monitoring using Prometheus.</p>', ], ], 'OpenMonitoringInfo' => [ 'base' => '<p>JMX and Node monitoring for the MSK cluster.</p>', 'refs' => [ 'CreateClusterRequest$OpenMonitoring' => '<p>The settings for open monitoring.</p>', 'UpdateMonitoringRequest$OpenMonitoring' => '<p>The settings for open monitoring.</p>', ], ], 'Prometheus' => [ 'base' => '<p>Prometheus settings for open monitoring.</p>', 'refs' => [ 'OpenMonitoring$Prometheus' => '<p>Prometheus settings.</p>', ], ], 'PrometheusInfo' => [ 'base' => '<p>Prometheus settings.</p>', 'refs' => [ 'OpenMonitoringInfo$Prometheus' => '<p>Prometheus settings.</p>', ], ], 'S3' => [ 'base' => '<p>The details of the Amazon S3 destination for broker logs.</p>', 'refs' => [ 'BrokerLogs$S3' => '<p>Details of the Amazon S3 destination for broker logs.</p>', ], ], 'ServiceUnavailableException' => [ 'base' => '<p>Returns information about an error.</p>', 'refs' => [], ], 'StateInfo' => [ 'base' => '<p>Contains information about the state of the Amazon MSK cluster.</p>', 'refs' => [ 'ClusterInfo$StateInfo' => '<p>Contains information about the state of the Amazon MSK cluster.</p>', ], ], 'StorageInfo' => [ 'base' => '<p>Contains information about storage volumes attached to MSK broker nodes.</p>', 'refs' => [ 'BrokerNodeGroupInfo$StorageInfo' => '<p>Contains information about storage volumes attached to MSK broker nodes.</p>', ], ], 'TagResourceRequest' => [ 'base' => '<p>Tag a resource.</p>', 'refs' => [], ], 'Tls' => [ 'base' => '<p>Details for client authentication using TLS.</p>', 'refs' => [ 'ClientAuthentication$Tls' => '<p>Details for ClientAuthentication using TLS.</p>', ], ], 'TooManyRequestsException' => [ 'base' => '<p>Returns information about an error.</p>', 'refs' => [], ], 'UnauthorizedException' => [ 'base' => '<p>Returns information about an error.</p>', 'refs' => [], ], 'UpdateBrokerCountRequest' => [ 'base' => '<p>Request body for UpdateBrokerCount.</p>', 'refs' => [], ], 'UpdateBrokerCountResponse' => [ 'base' => '<p>Response body for UpdateBrokerCount.</p>', 'refs' => [], ], 'UpdateBrokerStorageRequest' => [ 'base' => '<p>Request object for UpdateBrokerStorage.</p>', 'refs' => [], ], 'UpdateBrokerStorageResponse' => [ 'base' => '<p>Response body for UpdateBrokerStorage.</p>', 'refs' => [], ], 'UpdateClusterConfigurationRequest' => [ 'base' => '<p>Request body for UpdateClusterConfiguration.</p>', 'refs' => [], ], 'UpdateClusterConfigurationResponse' => [ 'base' => '<p>Response body for UpdateClusterConfiguration.</p>', 'refs' => [], ], 'UpdateMonitoringRequest' => [ 'base' => '<p>Request body for UpdateMonitoring.</p>', 'refs' => [], ], 'UpdateMonitoringResponse' => [ 'base' => '<p>Response body for UpdateMonitoring.</p>', 'refs' => [], ], 'ZookeeperNodeInfo' => [ 'base' => '<p>Zookeeper node information.</p>', 'refs' => [ 'NodeInfo$ZookeeperNodeInfo' => '<p>The ZookeeperNodeInfo.</p>', ], ], '__boolean' => [ 'base' => NULL, 'refs' => [ 'CloudWatchLogs$Enabled' => '<p>Specifies whether broker logs get sent to the specified CloudWatch Logs destination.</p>', 'EncryptionInTransit$InCluster' => '<p>When set to true, it indicates that data communication among the broker nodes of the cluster is encrypted. When set to false, the communication happens in plaintext.</p> <p>The default value is true.</p>', 'Firehose$Enabled' => '<p>Specifies whether broker logs get sent to the specified Kinesis Data Firehose delivery stream.</p>', 'JmxExporter$EnabledInBroker' => '<p>Indicates whether you want to enable or disable the JMX Exporter.</p>', 'JmxExporterInfo$EnabledInBroker' => '<p>JMX Exporter being enabled in broker.</p>', 'NodeExporter$EnabledInBroker' => '<p>Indicates whether you want to enable or disable the Node Exporter.</p>', 'NodeExporterInfo$EnabledInBroker' => '<p>Node Exporter being enabled in broker.</p>', 'S3$Enabled' => '<p>Specifies whether broker logs get sent to the specified Amazon S3 destination.</p>', ], ], '__double' => [ 'base' => NULL, 'refs' => [ 'BrokerNodeInfo$BrokerId' => '<p>The ID of the broker.</p>', 'ZookeeperNodeInfo$ZookeeperId' => '<p>The role-specific ID for Zookeeper.</p>', ], ], '__integer' => [ 'base' => NULL, 'refs' => [ 'BrokerEBSVolumeInfo$VolumeSizeGB' => ' <p>Size of the EBS volume to update.</p> ', 'ClusterInfo$NumberOfBrokerNodes' => ' <p>The number of broker nodes in the cluster.</p> ', 'CreateClusterRequest$NumberOfBrokerNodes' => ' <p>The number of broker nodes in the cluster.</p> ', 'MutableClusterInfo$NumberOfBrokerNodes' => ' <p>The number of broker nodes in the cluster.</p> ', ], ], '__integerMin1Max15' => [ 'base' => NULL, 'refs' => [ 'CreateClusterRequest$NumberOfBrokerNodes' => '<p>The number of Kafka broker nodes in the Amazon MSK cluster.</p>', 'UpdateBrokerCountRequest$TargetNumberOfBrokerNodes' => '<p>The number of broker nodes that you want the cluster to have after this operation completes successfully.</p>', ], ], '__integerMin1Max16384' => [ 'base' => NULL, 'refs' => [ 'EBSStorageInfo$VolumeSize' => '<p>The size in GiB of the EBS volume for the data drive on each broker node.</p>', ], ], '__listOfBrokerEBSVolumeInfo' => [ 'base' => NULL, 'refs' => [ 'MutableClusterInfo$BrokerEBSVolumeInfo' => '<p>Specifies the size of the EBS volume and the ID of the associated broker.</p>', 'UpdateBrokerStorageRequest$TargetBrokerEBSVolumeInfo' => '<p>Describes the target volume size and the ID of the broker to apply the update to.</p> <p>The value you specify for Target-Volume-in-GiB must be a whole number that is greater than 100 GiB.</p> <p>The storage per broker after the update operation can\'t exceed 16384 GiB.</p>', ], ], '__listOfClusterInfo' => [ 'base' => NULL, 'refs' => [ 'ListClustersResponse$ClusterInfoList' => '<p>Information on each of the MSK clusters in the response.</p>', ], ], '__listOfClusterOperationInfo' => [ 'base' => NULL, 'refs' => [ 'ListClusterOperationsResponse$ClusterOperationInfoList' => '<p>An array of cluster operation information objects.</p>', ], ], '__listOfConfiguration' => [ 'base' => NULL, 'refs' => [ 'ListConfigurationsResponse$Configurations' => '<p>An array of MSK configurations.</p>', ], ], '__listOfConfigurationRevision' => [ 'base' => NULL, 'refs' => [ 'ListConfigurationRevisionsResponse$Revisions' => '<p>List of ConfigurationRevision objects.</p>', ], ], '__listOfKafkaVersion' => [ 'base' => NULL, 'refs' => [ 'ListKafkaVersionsResponse$KafkaVersions' => '<p>An array of Kafka version objects.</p>', ], ], '__listOfNodeInfo' => [ 'base' => NULL, 'refs' => [ 'ListNodesResponse$NodeInfoList' => '<p>List containing a NodeInfo object.</p>', ], ], '__listOf__string' => [ 'base' => NULL, 'refs' => [ 'BrokerNodeGroupInfo$ClientSubnets' => '<p>The list of subnets to connect to in the client virtual private cloud (VPC). AWS creates elastic network interfaces inside these subnets. Client applications use elastic network interfaces to produce and consume data. Client subnets can\'t be in Availability Zone us-east-1e.</p>', 'BrokerNodeGroupInfo$SecurityGroups' => '<p>The AWS security groups to associate with the elastic network interfaces in order to specify who can connect to and communicate with the Amazon MSK cluster. If you don\'t specify a security group, Amazon MSK uses the default security group associated with the VPC. If you specify security groups that were shared with you, you must ensure that you have permissions to them. Specifically, you need the ec2:DescribeSecurityGroups permission.</p>', 'BrokerNodeInfo$Endpoints' => '<p>Endpoints for accessing the broker.</p>', 'Configuration$KafkaVersions' => '<p>An array of the versions of Apache Kafka with which you can use this MSK configuration. You can use this configuration for an MSK cluster only if the Apache Kafka version specified for the cluster appears in this array.</p>', 'CreateConfigurationRequest$KafkaVersions' => '<p>The versions of Apache Kafka with which you can use this MSK configuration.</p>', 'DescribeConfigurationResponse$KafkaVersions' => '<p>The versions of Apache Kafka with which you can use this MSK configuration.</p>', 'Tls$CertificateAuthorityArnList' => '<p>List of ACM Certificate Authority ARNs.</p>', 'ZookeeperNodeInfo$Endpoints' => '<p>Endpoints for accessing the ZooKeeper.</p>', ], ], '__long' => [ 'base' => NULL, 'refs' => [ 'BrokerSoftwareInfo$ConfigurationRevision' => '<p>The revision of the configuration to use. This field isn\'t visible in this preview release.</p>', 'ConfigurationRevision$Revision' => '<p>The revision number.</p>', 'DescribeConfigurationRevisionResponse$Revision' => '<p>The revision number.</p>', 'ConfigurationInfo$Revision' => '<p>The revision of the configuration to use.</p>', ], ], '__mapOf__string' => [ 'base' => NULL, 'refs' => [ 'ClusterInfo$Tags' => '<p>Tags attached to the cluster.</p>', 'CreateClusterRequest$Tags' => '<p>Create tags when creating the cluster.</p>', 'ListTagsForResourceResponse$Tags' => '<p>The key-value pair for the resource tag.</p>', 'TagResourceRequest$Tags' => '<p>The key-value pair for the resource tag.</p>', ], ], '__string' => [ 'base' => NULL, 'refs' => [ 'BrokerEBSVolumeInfo$KafkaBrokerNodeId' => '<p>The ID of the broker to update.</p>', 'BrokerNodeInfo$AttachedENIId' => '<p>The attached elastic network interface of the broker.</p>', 'BrokerNodeInfo$ClientSubnet' => '<p>The client subnet to which this broker node belongs.</p>', 'BrokerNodeInfo$ClientVpcIpAddress' => '<p>The virtual private cloud (VPC) of the client.</p>', 'BrokerSoftwareInfo$ConfigurationArn' => '<p>The Amazon Resource Name (ARN) of the configuration used for the cluster. This field isn\'t visible in this preview release.</p>', 'BrokerSoftwareInfo$KafkaVersion' => '<p>The version of Apache Kafka.</p>', 'CloudWatchLogs$LogGroup' => '<p>The CloudWatch log group that is the destination for broker logs.</p>', 'ClusterInfo$ActiveOperationArn' => '<p>Arn of active cluster operation.</p>', 'ClusterInfo$ClusterArn' => '<p>The Amazon Resource Name (ARN) that uniquely identifies the cluster.</p>', 'ClusterInfo$ClusterName' => '<p>The name of the cluster.</p>', 'ClusterInfo$CurrentVersion' => '<p>The current version of the MSK cluster. Cluster versions aren\'t simple integers. You can obtain the current version by describing the cluster. An example version is KTVPDKIKX0DER.</p>', 'ClusterInfo$ZookeeperConnectString' => '<p>The connection string to use to connect to the Apache ZooKeeper cluster.</p>', 'ClusterOperationInfo$ClientRequestId' => '<p>The ID of the API request that triggered this operation.</p>', 'ClusterOperationInfo$ClusterArn' => '<p>ARN of the cluster.</p>', 'ClusterOperationInfo$OperationArn' => '<p>ARN of the cluster operation.</p>', 'ClusterOperationInfo$OperationState' => '<p>State of the cluster operation.</p>', 'ClusterOperationInfo$OperationType' => '<p>Type of the cluster operation.</p>', 'Configuration$Arn' => '<p>The Amazon Resource Name (ARN) of the configuration.</p>', 'Configuration$Description' => '<p>The description of the configuration.</p>', 'Configuration$Name' => '<p>The name of the configuration. Configuration names are strings that match the regex "^[0-9A-Za-z-]+$".</p>', 'ConfigurationInfo$Arn' => '<p>ARN of the configuration to use.</p>', 'ConfigurationRevision$Description' => '<p>The description of the configuration revision.</p>', 'CreateClusterResponse$ClusterArn' => '<p>The Amazon Resource Name (ARN) of the cluster.</p>', 'CreateClusterResponse$ClusterName' => '<p>The name of the MSK cluster.</p>', 'CreateConfigurationRequest$Description' => '<p>The description of the configuration.</p>', 'CreateConfigurationRequest$Name' => '<p>The name of the configuration. Configuration names are strings that match the regex "^[0-9A-Za-z-]+$".</p>', 'CreateConfigurationResponse$Arn' => '<p>The Amazon Resource Name (ARN) of the configuration.</p>', 'CreateConfigurationResponse$Name' => '<p>The name of the configuration. Configuration names are strings that match the regex "^[0-9A-Za-z-]+$".</p>', 'DeleteClusterResponse$ClusterArn' => '<p>The Amazon Resource Name (ARN) of the cluster.</p>', 'DescribeConfigurationResponse$Arn' => '<p>The Amazon Resource Name (ARN) of the configuration.</p>', 'DescribeConfigurationResponse$Description' => '<p>The description of the configuration.</p>', 'DescribeConfigurationResponse$Name' => '<p>The name of the configuration. Configuration names are strings that match the regex "^[0-9A-Za-z-]+$".</p>', 'DescribeConfigurationRevisionResponse$Arn' => '<p>The Amazon Resource Name (ARN) of the configuration.</p>', 'DescribeConfigurationRevisionResponse$Description' => '<p>The description of the configuration.</p>', 'EncryptionAtRest$DataVolumeKMSKeyId' => '<p>The ARN of the AWS KMS key for encrypting data at rest. If you don\'t specify a KMS key, MSK creates one for you and uses it.</p>', 'Error$InvalidParameter' => '<p>The parameter that caused the error.</p>', 'Error$Message' => '<p>The description of the error.</p>', 'ErrorInfo$ErrorCode' => '<p>A number describing the error programmatically.</p>', 'ErrorInfo$ErrorString' => '<p>An optional field to provide more details about the error.</p>', 'Firehose$DeliveryStream' => '<p>The Kinesis Data Firehose delivery stream that is the destination for broker logs.</p>', 'GetBootstrapBrokersResponse$BootstrapBrokerString' => '<p>A string containing one or more hostname:port pairs.</p>', 'GetBootstrapBrokersResponse$BootstrapBrokerStringTls' => '<p>A string containing one or more DNS names (or IP) and TLS port pairs. The following is an example.</p> <programlisting>{ "BootstrapBrokerStringTls": "b-3.exampleClusterName.abcde.c2.kafka.us-east-1.amazonaws.com:9094,b-1.exampleClusterName.abcde.c2.kafka.us-east-1.amazonaws.com:9094,b-2.exampleClusterName.abcde.c2.kafka.us-east-1.amazonaws.com:9094"}</programlisting>', 'KafkaVersion$Version' => '<p>The Kafka version.</p>', 'ListClusterOperationsResponse$NextToken' => '<p>If the response of ListClusterOperations is truncated, it returns a NextToken in the response. This Nexttoken should be sent in the subsequent request to ListClusterOperations.</p>', 'ListClustersResponse$NextToken' => '<p>The paginated results marker. When the result of a ListClusters operation is truncated, the call returns NextToken in the response. To get another batch of clusters, provide this token in your next request.</p>', 'ListConfigurationRevisionsResponse$NextToken' => '<p>Paginated results marker.</p>', 'ListConfigurationsResponse$NextToken' => '<p>The paginated results marker. When the result of a ListConfigurations operation is truncated, the call returns NextToken in the response. To get another batch of configurations, provide this token in your next request.</p>', 'ListKafkaVersionsResponse$NextToken' => '<p>Paginated results marker.</p>', 'ListNodesResponse$NextToken' => '<p>The paginated results marker. When the result of a ListNodes operation is truncated, the call returns NextToken in the response. To get another batch of nodes, provide this token in your next request.</p>', 'NodeInfo$AddedToClusterTime' => '<p>The start time.</p>', 'NodeInfo$InstanceType' => '<p>The instance type.</p>', 'NodeInfo$NodeARN' => '<p>The Amazon Resource Name (ARN) of the node.</p>', 'S3$Bucket' => '<p>The name of the S3 bucket that is the destination for broker logs.</p>', 'S3$Prefix' => '<p>The S3 prefix that is the destination for broker logs.</p>', 'StateInfo$Code' => '<p>If the cluster is in an unusable state, this field contains the code that describes the issue.</p>', 'StateInfo$Message' => '<p>If the cluster is in an unusable state, this field contains a message that describes the issue.</p>', 'UpdateBrokerCountRequest$CurrentVersion' => '<p>The current version of the cluster.</p>', 'UpdateBrokerCountResponse$ClusterArn' => '<p>The Amazon Resource Name (ARN) of the cluster.</p>', 'UpdateBrokerCountResponse$ClusterOperationArn' => '<p>The Amazon Resource Name (ARN) of the cluster operation.</p>', 'UpdateBrokerStorageRequest$CurrentVersion' => '<p>The version of cluster to update from. A successful operation will then generate a new version.</p>', 'UpdateBrokerStorageResponse$ClusterArn' => '<p>The Amazon Resource Name (ARN) of the cluster.</p>', 'UpdateBrokerStorageResponse$ClusterOperationArn' => '<p>The Amazon Resource Name (ARN) of the cluster operation.</p>', 'UpdateClusterConfigurationRequest$CurrentVersion' => '<p>The version of the cluster that you want to update.</p>', 'UpdateClusterConfigurationResponse$ClusterArn' => '<p>The Amazon Resource Name (ARN) of the cluster.</p>', 'UpdateClusterConfigurationResponse$ClusterOperationArn' => '<p>The Amazon Resource Name (ARN) of the cluster operation.</p>', 'UpdateMonitoringRequest$CurrentVersion' => '<p>The version of cluster to update from. A successful operation will then generate a new version.</p>', 'UpdateMonitoringResponse$ClusterArn' => '<p>The Amazon Resource Name (ARN) of the cluster.</p>', 'UpdateMonitoringResponse$ClusterOperationArn' => '<p>The Amazon Resource Name (ARN) of the cluster operation.</p>', 'ZookeeperNodeInfo$AttachedENIId' => '<p>The attached elastic network interface of the broker.</p>', 'ZookeeperNodeInfo$ClientVpcIpAddress' => '<p>The virtual private cloud (VPC) IP address of the client.</p>', 'ZookeeperNodeInfo$ZookeeperVersion' => '<p>The version of Zookeeper.</p>', '__listOf__string$member' => NULL, '__mapOf__string$member' => NULL, ], ], '__stringMin1Max128' => [ 'base' => NULL, 'refs' => [ 'CreateClusterRequest$KafkaVersion' => '<p>The version of Apache Kafka.</p>', ], ], '__stringMin1Max64' => [ 'base' => NULL, 'refs' => [ 'CreateClusterRequest$ClusterName' => '<p>The name of the cluster.</p>', ], ], '__stringMin5Max32' => [ 'base' => NULL, 'refs' => [ 'BrokerNodeGroupInfo$InstanceType' => '<p>The type of Amazon EC2 instances to use for Kafka brokers. The following instance types are allowed: kafka.m5.large, kafka.m5.xlarge, kafka.m5.2xlarge, kafka.m5.4xlarge, kafka.m5.12xlarge, and kafka.m5.24xlarge.</p>', ], ], '__timestampIso8601' => [ 'base' => NULL, 'refs' => [ 'ClusterInfo$CreationTime' => '<p>The time when the cluster was created.</p>', 'ConfigurationRevision$CreationTime' => '<p>The time when the configuration revision was created.</p>', 'CreateConfigurationResponse$CreationTime' => '<p>The time when the configuration was created.</p>', 'DescribeConfigurationResponse$CreationTime' => '<p>The time when the configuration was created.</p>', 'DescribeConfigurationRevisionResponse$CreationTime' => '<p>The time when the configuration was created.</p>', 'ClusterOperationInfo$CreationTime' => '<p>The time at which operation was created.</p>', 'ClusterOperationInfo$EndTime' => '<p>The time at which the operation finished.</p>', ], ], ],];
