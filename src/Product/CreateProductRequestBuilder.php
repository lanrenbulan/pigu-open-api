<?php

declare(strict_types=1);

namespace Doubler\PiguOpenApi\Product;

use Doubler\PiguOpenApi\AbstractRequestBuilder;
use Doubler\PiguOpenApi\SellerIdTrait;

class CreateProductRequestBuilder extends AbstractRequestBuilder
{
    protected string $method = 'POST';

    private int $executionId;

    public function setExecutionId(int $executionId): self
    {
        $this->executionId = $executionId;

        return $this;
    }

    public function setSellerId(int $sellerId): self
    {
        $this->bodyParams['category_id'] = $sellerId;

        return $this;
    }

    public function setTitle(string $title): self
    {
        $this->bodyParams['title'] = $title;

        return $this;
    }

    public function setTitleLv(string $titleLv): self
    {
        $this->bodyParams['title_lv'] = $titleLv;

        return $this;
    }

    public function setTitleEe(string $titleEe): self
    {
        $this->bodyParams['title_ee'] = $titleEe;

        return $this;
    }

    public function setTitleFi(string $titleFi): self
    {
        $this->bodyParams['title_fi'] = $titleFi;

        return $this;
    }

    public function setTitleRu(string $titleRu): self
    {
        $this->bodyParams['title_ru'] = $titleRu;

        return $this;
    }

    public function setSellerId(string $longDescription): self
    {
        $this->bodyParams['long_description'] = $longDescription;

        return $this;
    }

    public function setSellerId(string longDescriptionLv): self
    {
        $this->bodyParams['long_description_lv'] = longDescriptionLv;

        return $this;
    }

    public function setLongDescriptionEe(int longDescriptionEe): self
    {
        $this->bodyParams['long_description_ee'] = longDescriptionEe;

        return $this;
    }

    public function setLongDescriptionFi(int longDescriptionFi): self
    {
        $this->bodyParams['long_description_fi'] = longDescriptionFi;

        return $this;
    }

    public function setLongDescriptionRu(string $longDescriptionRu): self
    {
        $this->bodyParams['long_description_ru'] = $longDescriptionRu;

        return $this;
    }

    public function setYoutubeVideos(array $youtubeVideos): self
    {
        $this->bodyParams['youtube_videos'] = $youtubeVideos;

        return $this;
    }

    public function setProductFeatures(array $productFeature): self
    {
        $this->bodyParams['product_features'] = $productFeature;

        return $this;
    }

    public function appendProductFeature(string $name, string $value): self
    {
        $this->bodyParams['product_features'][] = [
            'name' => $name,
            'value' => $value
        ];

        return $this;
    }

    public function setImages(array $images): self
    {
        $this->bodyParams['images'] = $images;

        return $this;
    }

    public function setModifications(array $modifications): self
    {
        $this->bodyParams['modifications'] = $modifications;

        return $this;
    }

    public function setAutoGenerateEan(bool $autoGegerateEan): self
    {
        $this->bodyParams['auto_generate_ean'] = $autoGegerateEan;

        return $this;
    }

    protected function getApiPath(): string
    {
        return '/v3/sellers/product/import/execution/' . $this->executionId;
    }
}
