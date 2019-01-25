<?php
/**
 * This file is part of the Swiftype App Search PHP Client package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Swiftype\AppSearch;

/**
 * Client implementation.
 *
 * @package Swiftype\AppSearch
 *
 * @author  Aurélien FOUCRET <aurelien.foucret@elastic.co>
 */
class Client
{
    /**
     * @var Connection\Connection
     */
    private $connection;

    /**
     * @var callable
     */
    private $endpointBuilder;

    /**
     * Client constructor.
     *
     * @param callable              $endpointBuilder Allow to access endpoints.
     * @param Connection\Connection $connection      HTTP connection handler.
     */
    public function __construct(callable $endpointBuilder, Connection\Connection $connection)
    {
        $this->endpointBuilder = $endpointBuilder;
        $this->connection = $connection;
    }

    // phpcs:disable

    /**
     * Operation: createCuration.
     *
     * @param string   $engineName Name of the engine.
     * @param string[] $queries
     * @param string[] $promoted
     * @param string[] $hidden
     *
     * @return array
     */
    public function createCuration($engineName, $queries, $promoted = null, $hidden = null)
    {
        $params = [
            'engine_name' => $engineName,
            'queries' => $queries,
            'promoted' => $promoted,
            'hidden' => $hidden,
        ];

        $endpoint = ($this->endpointBuilder)('CreateCuration');
        $endpoint->setParams($params);

        return $this->performRequest($endpoint);
    }

    /**
     * Operation: createEngine.
     *
     * @param string $name     Engine name.
     * @param string $language Language code.
     *
     * @return array
     */
    public function createEngine($name, $language = null)
    {
        $params = [
            'name' => $name,
            'language' => $language,
        ];

        $endpoint = ($this->endpointBuilder)('CreateEngine');
        $endpoint->setParams($params);

        return $this->performRequest($endpoint);
    }

    /**
     * Operation: createSynonymSet.
     *
     * @param string   $engineName Name of the engine.
     * @param string[] $synonyms
     *
     * @return array
     */
    public function createSynonymSet($engineName, $synonyms)
    {
        $params = [
            'engine_name' => $engineName,
            'synonyms' => $synonyms,
        ];

        $endpoint = ($this->endpointBuilder)('CreateSynonymSet');
        $endpoint->setParams($params);

        return $this->performRequest($endpoint);
    }

    /**
     * Operation: deleteCuration.
     *
     * @param string $engineName Name of the engine.
     * @param string $curationId Curation id.
     *
     * @return array
     */
    public function deleteCuration($engineName, $curationId)
    {
        $params = [
            'engine_name' => $engineName,
            'curation_id' => $curationId,
        ];

        $endpoint = ($this->endpointBuilder)('DeleteCuration');
        $endpoint->setParams($params);

        return $this->performRequest($endpoint);
    }

    /**
     * Operation: deleteDocuments.
     *
     * @param string   $engineName  Name of the engine.
     * @param string[] $requestBody Documents update.
     *
     * @return array
     */
    public function deleteDocuments($engineName, $requestBody = null)
    {
        $params = [
            'engine_name' => $engineName,
        ];

        $endpoint = ($this->endpointBuilder)('DeleteDocuments');
        $endpoint->setParams($params);
        $endpoint->setBody($requestBody);

        return $this->performRequest($endpoint);
    }

    /**
     * Operation: deleteEngine.
     *
     * @param string $engineName Name of the engine.
     *
     * @return array
     */
    public function deleteEngine($engineName)
    {
        $params = [
            'engine_name' => $engineName,
        ];

        $endpoint = ($this->endpointBuilder)('DeleteEngine');
        $endpoint->setParams($params);

        return $this->performRequest($endpoint);
    }

    /**
     * Operation: deleteSynonymSet.
     *
     * @param string $engineName   Name of the engine.
     * @param string $synonymSetId Synonym set id.
     *
     * @return array
     */
    public function deleteSynonymSet($engineName, $synonymSetId)
    {
        $params = [
            'engine_name' => $engineName,
            'synonym_set_id' => $synonymSetId,
        ];

        $endpoint = ($this->endpointBuilder)('DeleteSynonymSet');
        $endpoint->setParams($params);

        return $this->performRequest($endpoint);
    }

    /**
     * Operation: getCuration.
     *
     * @param string $engineName Name of the engine.
     * @param string $curationId Curation id.
     *
     * @return array
     */
    public function getCuration($engineName, $curationId)
    {
        $params = [
            'engine_name' => $engineName,
            'curation_id' => $curationId,
        ];

        $endpoint = ($this->endpointBuilder)('GetCuration');
        $endpoint->setParams($params);

        return $this->performRequest($endpoint);
    }

    /**
     * Operation: getDocuments.
     *
     * @param string   $engineName Name of the engine.
     * @param string[] $ids        Documents ids.
     *
     * @return array
     */
    public function getDocuments($engineName, $ids)
    {
        $params = [
            'engine_name' => $engineName,
            'ids' => $ids,
        ];

        $endpoint = ($this->endpointBuilder)('GetDocuments');
        $endpoint->setParams($params);

        return $this->performRequest($endpoint);
    }

    /**
     * Operation: getEngine.
     *
     * @param string $engineName Name of the engine.
     *
     * @return array
     */
    public function getEngine($engineName)
    {
        $params = [
            'engine_name' => $engineName,
        ];

        $endpoint = ($this->endpointBuilder)('GetEngine');
        $endpoint->setParams($params);

        return $this->performRequest($endpoint);
    }

    /**
     * Operation: getSchema.
     *
     * @param string $engineName Name of the engine.
     *
     * @return array
     */
    public function getSchema($engineName)
    {
        $params = [
            'engine_name' => $engineName,
        ];

        $endpoint = ($this->endpointBuilder)('GetSchema');
        $endpoint->setParams($params);

        return $this->performRequest($endpoint);
    }

    /**
     * Operation: getSearchSettings.
     *
     * @param string $engineName Name of the engine.
     *
     * @return array
     */
    public function getSearchSettings($engineName)
    {
        $params = [
            'engine_name' => $engineName,
        ];

        $endpoint = ($this->endpointBuilder)('GetSearchSettings');
        $endpoint->setParams($params);

        return $this->performRequest($endpoint);
    }

    /**
     * Operation: getSynonymSet.
     *
     * @param string $engineName   Name of the engine.
     * @param string $synonymSetId Synonym set id.
     *
     * @return array
     */
    public function getSynonymSet($engineName, $synonymSetId)
    {
        $params = [
            'engine_name' => $engineName,
            'synonym_set_id' => $synonymSetId,
        ];

        $endpoint = ($this->endpointBuilder)('GetSynonymSet');
        $endpoint->setParams($params);

        return $this->performRequest($endpoint);
    }

    /**
     * Operation: indexDocuments.
     *
     * @param string  $engineName  Name of the engine.
     * @param array[] $requestBody Indexed documents.
     *
     * @return array
     */
    public function indexDocuments($engineName, $requestBody = null)
    {
        $params = [
            'engine_name' => $engineName,
        ];

        $endpoint = ($this->endpointBuilder)('IndexDocuments');
        $endpoint->setParams($params);
        $endpoint->setBody($requestBody);

        return $this->performRequest($endpoint);
    }

    /**
     * Operation: listCurations.
     *
     * @param string $engineName  Name of the engine.
     * @param int    $pageCurrent The current page.
     * @param int    $pageSize    The number of results to show on each page.
     *
     * @return array
     */
    public function listCurations($engineName, $pageCurrent = null, $pageSize = null)
    {
        $params = [
            'engine_name' => $engineName,
            'page.current' => $pageCurrent,
            'page.size' => $pageSize,
        ];

        $endpoint = ($this->endpointBuilder)('ListCurations');
        $endpoint->setParams($params);

        return $this->performRequest($endpoint);
    }

    /**
     * Operation: listDocuments.
     *
     * @param string $engineName  Name of the engine.
     * @param int    $pageCurrent The current page.
     * @param int    $pageSize    The number of results to show on each page.
     *
     * @return array
     */
    public function listDocuments($engineName, $pageCurrent = null, $pageSize = null)
    {
        $params = [
            'engine_name' => $engineName,
            'page.current' => $pageCurrent,
            'page.size' => $pageSize,
        ];

        $endpoint = ($this->endpointBuilder)('ListDocuments');
        $endpoint->setParams($params);

        return $this->performRequest($endpoint);
    }

    /**
     * Operation: listEngines.
     *
     * @param int $pageCurrent The current page.
     * @param int $pageSize    The number of results to show on each page.
     *
     * @return array
     */
    public function listEngines($pageCurrent = null, $pageSize = null)
    {
        $params = [
            'page.current' => $pageCurrent,
            'page.size' => $pageSize,
        ];

        $endpoint = ($this->endpointBuilder)('ListEngines');
        $endpoint->setParams($params);

        return $this->performRequest($endpoint);
    }

    /**
     * Operation: listSynonyms.
     *
     * @param string $engineName  Name of the engine.
     * @param int    $pageCurrent The current page.
     * @param int    $pageSize    The number of results to show on each page.
     *
     * @return array
     */
    public function listSynonyms($engineName, $pageCurrent = null, $pageSize = null)
    {
        $params = [
            'engine_name' => $engineName,
            'page.current' => $pageCurrent,
            'page.size' => $pageSize,
        ];

        $endpoint = ($this->endpointBuilder)('ListSynonyms');
        $endpoint->setParams($params);

        return $this->performRequest($endpoint);
    }

    /**
     * Operation: multiSearch.
     *
     * @param string  $engineName Name of the engine.
     * @param array[] $queries    Array of search queries.
     *
     * @return array
     */
    public function multiSearch($engineName, $queries = null)
    {
        $params = [
            'engine_name' => $engineName,
            'queries' => $queries,
        ];

        $endpoint = ($this->endpointBuilder)('MultiSearch');
        $endpoint->setParams($params);

        return $this->performRequest($endpoint);
    }

    /**
     * Operation: resetSearchSettings.
     *
     * @param string $engineName Name of the engine.
     *
     * @return array
     */
    public function resetSearchSettings($engineName)
    {
        $params = [
            'engine_name' => $engineName,
        ];

        $endpoint = ($this->endpointBuilder)('ResetSearchSettings');
        $endpoint->setParams($params);

        return $this->performRequest($endpoint);
    }

    /**
     * Operation: search.
     *
     * @param string   $engineName    Name of the engine.
     * @param string   $query         Search query text.
     * @param int      $pageCurrent   The current page.
     * @param int      $pageSize      The number of results to show on each page.
     * @param array[]  $filters       Search query filters.
     * @param array[]  $sort          Search query sort orders.
     * @param array[]  $facets        Search query facets.
     * @param array[]  $searchFields  Search query fields and weights.
     * @param array[]  $boosts        Search query boosts.
     * @param array[]  $group         Search result group specification.
     * @param array[]  $resultFields  Search result fields.
     * @param string[] $analyticsTags Analytics tags for the current search.
     *
     * @return array
     */
    public function search($engineName, $query, $pageCurrent = null, $pageSize = null, $filters = null, $sort = null, $facets = null, $searchFields = null, $boosts = null, $group = null, $resultFields = null, $analyticsTags = null)
    {
        $params = [
            'engine_name' => $engineName,
            'query' => $query,
            'page.current' => $pageCurrent,
            'page.size' => $pageSize,
            'filters' => $filters,
            'sort' => $sort,
            'facets' => $facets,
            'search_fields' => $searchFields,
            'boosts' => $boosts,
            'group' => $group,
            'result_fields' => $resultFields,
            'analytics.tags' => $analyticsTags,
        ];

        $endpoint = ($this->endpointBuilder)('Search');
        $endpoint->setParams($params);

        return $this->performRequest($endpoint);
    }

    /**
     * Operation: sendClick.
     *
     * @param string   $engineName Name of the engine.
     * @param string   $query      The query that the user searched with.
     * @param string   $documentId The id of the document that was clicked on.
     * @param string   $requestId  The request id returned in the meta tag of a search API response.
     * @param string[] $tags       Array of strings representing additional information you wish to track with the clickthrough.
     *
     * @return array
     */
    public function sendClick($engineName, $query, $documentId, $requestId = null, $tags = null)
    {
        $params = [
            'engine_name' => $engineName,
            'query' => $query,
            'document_id' => $documentId,
            'request_id' => $requestId,
            'tags' => $tags,
        ];

        $endpoint = ($this->endpointBuilder)('SendClick');
        $endpoint->setParams($params);

        return $this->performRequest($endpoint);
    }

    /**
     * Operation: updateCuration.
     *
     * @param string   $engineName Name of the engine.
     * @param string   $curationId Curation id.
     * @param string[] $queries    Curated queries.
     * @param string[] $promoted   Promoted doc ids.
     * @param string[] $hidden     Hidden doc ids.
     *
     * @return array
     */
    public function updateCuration($engineName, $curationId, $queries, $promoted = null, $hidden = null)
    {
        $params = [
            'engine_name' => $engineName,
            'curation_id' => $curationId,
            'queries' => $queries,
            'promoted' => $promoted,
            'hidden' => $hidden,
        ];

        $endpoint = ($this->endpointBuilder)('UpdateCuration');
        $endpoint->setParams($params);

        return $this->performRequest($endpoint);
    }

    /**
     * Operation: updateDocuments.
     *
     * @param string  $engineName  Name of the engine.
     * @param array[] $requestBody Documents update.
     *
     * @return array
     */
    public function updateDocuments($engineName, $requestBody = null)
    {
        $params = [
            'engine_name' => $engineName,
        ];

        $endpoint = ($this->endpointBuilder)('UpdateDocuments');
        $endpoint->setParams($params);
        $endpoint->setBody($requestBody);

        return $this->performRequest($endpoint);
    }

    /**
     * Operation: updateSchema.
     *
     * @param string  $engineName  Name of the engine.
     * @param array[] $requestBody Schema description.
     *
     * @return array
     */
    public function updateSchema($engineName, $requestBody = null)
    {
        $params = [
            'engine_name' => $engineName,
        ];

        $endpoint = ($this->endpointBuilder)('UpdateSchema');
        $endpoint->setParams($params);
        $endpoint->setBody($requestBody);

        return $this->performRequest($endpoint);
    }

    /**
     * Operation: updateSearchSettings.
     *
     * @param string  $engineName  Name of the engine.
     * @param array[] $requestBody Schema description.
     *
     * @return array
     */
    public function updateSearchSettings($engineName, $requestBody = null)
    {
        $params = [
            'engine_name' => $engineName,
        ];

        $endpoint = ($this->endpointBuilder)('UpdateSearchSettings');
        $endpoint->setParams($params);
        $endpoint->setBody($requestBody);

        return $this->performRequest($endpoint);
    }

    // phpcs:enable

    private function performRequest(Endpoint\EndpointInterface $endpoint)
    {
        $method = $endpoint->getMethod();
        $uri = $endpoint->getURI();
        $params = $endpoint->getParams();
        $body = $endpoint->getBody();

        $response = $this->connection->performRequest($method, $uri, $params, $body)->wait();

        return $response['body'] ?? $response;
    }
}
