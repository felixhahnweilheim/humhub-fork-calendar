<?php
/**
 * @link https://www.humhub.org/
 * @copyright Copyright (c) 2017 HumHub GmbH & Co. KG
 * @license https://www.humhub.com/licences
 *
 */

/**
 * Created by PhpStorm.
 * User: buddha
 * Date: 23.07.2017
 * Time: 23:00
 */

namespace humhub\modules\calendar\controllers;


use Yii;
use humhub\modules\calendar\interfaces\CalendarService;
use humhub\modules\admin\permissions\ManageSpaces;
use humhub\modules\calendar\models\CalendarEntryType;
use humhub\modules\calendar\permissions\ManageEntry;
use humhub\modules\calendar\models\DefaultSettings;
use yii\data\ActiveDataProvider;
use yii\web\HttpException;

class ContainerConfigController extends AbstractConfigController
{
    /**
     * @inheritdoc
     */
    public function getAccessRules()
    {
        return [
          ['permission' => [ManageSpaces::class, ManageEntry::class]]
        ];
    }
}