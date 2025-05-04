<?php

namespace AlexStewartJa\DXtrade\Resources\Administrative;

use AlexStewartJa\DXtrade\Enums\CategoryDomain;
use AlexStewartJa\DXtrade\Exceptions\DXtradeException;
use AlexStewartJa\DXtrade\Models\Administrative\AccountCategory;
use AlexStewartJa\DXtrade\Models\Administrative\AccountGroup;
use AlexStewartJa\DXtrade\Models\Administrative\Category;
use AlexStewartJa\DXtrade\Models\Administrative\CategoryValue;
use AlexStewartJa\DXtrade\Models\Administrative\ErrorDescription;
use AlexStewartJa\DXtrade\Models\Administrative\RenameAccountGroup;
use AlexStewartJa\DXtrade\Models\Administrative\SetAccountCategory;
use AlexStewartJa\DXtrade\Resources\SubResource;

class CategoriesResource extends SubResource
{
    /**
     * List all the available setting categories
     *
     * @return Category[]|ErrorDescription
     *
     * @throws DXtradeException
     */
    public function getCategories(): array|ErrorDescription
    {
        $response = $this->request('get', '/api/register/category');

        if ($response instanceof ErrorDescription) {
            return $response;
        }

        /** @var Category[] $categories */
        $categories = [];
        foreach ($response as $category) {
            $categories[] = new Category($category);
        }

        return $categories;
    }

    /**
     * Retrieve category by broker
     *
     * @param  string  $brokerCode  code of the broker
     * @param  string  $categoryDomain  domain of the category
     *
     * @throws DXtradeException
     */
    public function getCategoryByBroker(string $brokerCode, string $categoryDomain): Category|ErrorDescription
    {
        $response = $this->request(
            'get',
            "/api/register/broker/{$brokerCode}/category/{$categoryDomain}"
        );

        return is_array($response) ? new Category($response) : $response;
    }

    /**
     * Retrieve categories by broker
     *
     * @param  string  $brokerCode  code of the broker
     *
     * @throws DXtradeException
     */
    public function getCategoriesByBroker(string $brokerCode): Category|ErrorDescription
    {
        $response = $this->request('get', "/api/register/broker/{$brokerCode}/category");

        return is_array($response) ? new Category($response) : $response;
    }

    /**
     * Create new account category
     *
     * @param  string  $brokerCode  code of the broker
     * @param  AccountGroup  $category  category
     *
     * @throws DXtradeException
     */
    public function createAccountCategory(string $brokerCode, AccountGroup $category): AccountGroup|ErrorDescription
    {
        $response = $this->request(
            'post',
            "/api/register/broker/{$brokerCode}/category",
            $category->toArray()
        );

        return is_array($response) ? new AccountGroup($response) : $response;
    }

    /**
     * Give a new name to a category
     *
     * @param  string  $brokerCode  code of the broker
     *
     * @throws DXtradeException
     *
     * @link https://demo.dx.trade/developers/#/DXtrade-Register-API?id=rename-category Rename a Category
     */
    public function renameAccountCategory(string $brokerCode, RenameAccountGroup $renameCategory): AccountGroup|ErrorDescription
    {
        $response = $this->request(
            'put',
            "/api/register/broker/{$brokerCode}/category",
            $renameCategory->toArray()
        );

        return is_array($response) ? new AccountGroup($response) : $response;
    }

    /**
     * Delete account category
     *
     * @param  string  $brokerCode  code of the broker
     * @param  AccountGroup  $category  category
     * @return true|ErrorDescription
     *
     * @throws DXtradeException
     */
    public function deleteAccountCategoryByBroker(string $brokerCode, AccountGroup $category): bool|ErrorDescription
    {
        $response = $this->request(
            'delete',
            "/api/register/broker/{$brokerCode}/category",
            $category->toArray()
        );

        return is_array($response) ? true : $response;
    }

    /**
     * Retrieve category for account
     *
     * @param  string  $clearingCode  account clearing code
     * @param  string  $accountCode  account code
     * @param  string  $categoryDomain  domain of the category
     * @param  string|null  $attributes  Requested attributes
     *
     * @throws DXtradeException
     *
     * @see CategoryDomain
     */
    public function getAccountCategory(
        string $clearingCode,
        string $accountCode,
        string $categoryDomain,
        ?string $attributes = null
    ): AccountGroup|ErrorDescription {
        $params = ($attributes !== null) ? ['attributes' => $attributes] : [];

        $response = $this->request(
            'get',
            "/api/register/account/{$clearingCode}/{$accountCode}/category/{$categoryDomain}",
            $params
        );

        return is_array($response) ? new AccountGroup($response) : $response;
    }

    /**
     * Assigns a category to an account for the given category domain
     *
     * @param  string  $clearingCode  account clearing code
     * @param  string  $accountCode  account code
     * @param  string  $categoryDomain  domain of the category
     * @param  CategoryValue  $categoryValue  The category of the specified domain that should be assigned to the account
     * @return true|ErrorDescription
     *
     * @throws DXtradeException
     *
     * @see CategoryDomain
     */
    public function setAccountCategory(
        string $clearingCode,
        string $accountCode,
        string $categoryDomain,
        CategoryValue $categoryValue
    ): bool|ErrorDescription {
        $response = $this->request(
            'put',
            "/api/register/account/{$clearingCode}/{$accountCode}/category/{$categoryDomain}",
            $categoryValue->toArray()
        );

        return is_array($response) ? true : $response;
    }

    /**
     * Delete category for account
     *
     * @param  string  $clearingCode  account clearing code
     * @param  string  $accountCode  account code
     * @param  string  $categoryDomain  domain of the category
     * @param  CategoryValue  $categoryValue  The category of the specified domain that should be deleted from the account
     * @return true|ErrorDescription
     *
     * @throws DXtradeException
     */
    public function deleteAccountCategory(
        string $clearingCode,
        string $accountCode,
        string $categoryDomain,
        CategoryValue $categoryValue
    ): bool|ErrorDescription {
        $response = $this->request(
            'delete',
            "/api/register/account/{$clearingCode}/{$accountCode}/category/{$categoryDomain}",
            $categoryValue->toArray()
        );

        return is_array($response) ? true : $response;
    }

    /**
     * Assign categories to accounts for the given category domains
     *
     * @param  SetAccountCategory[]  $accountCategories  account category models to set
     * @return true|ErrorDescription
     *
     * @throws DXtradeException
     */
    public function setAccountCategories(array $accountCategories): bool|ErrorDescription
    {
        $response = $this->request(
            'put',
            '/api/register/account/category',
            $accountCategories
        );

        return is_array($response) ? true : $response;
    }

    /**
     * Delete existing category assignments to accounts for the given category domains
     *
     * @param  AccountCategory[]  $accountCategories  account category models to delete
     * @return true|ErrorDescription
     *
     * @throws DXtradeException
     */
    public function deleteAccountCategories(array $accountCategories): bool|ErrorDescription
    {
        $response = $this->request(
            'delete',
            '/api/register/account/category',
            $accountCategories
        );

        return is_array($response) ? true : $response;
    }
}
