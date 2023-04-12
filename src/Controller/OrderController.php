<?php

namespace App\Controller;

use App\Client\GemotestClient;
use App\Client\Type\AdditionalInformation;
use App\Client\Type\AdditionalTests;
use App\Client\Type\Informing;
use App\Client\Type\Order;
use App\Client\Type\Patient;
use App\Client\Type\Representative;
use App\Client\Type\Services;
use App\Client\Type\ServicesSupplementals;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Contracts\HttpClient\HttpClientInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class OrderController
 * @package App\Controller
 * @Route("/api", name="post_api")
 */
class OrderController extends AbstractController
{
    public function __construct(
        private GemotestClient $client,
    ) {
    }

    public function fetchGemotestInformation(): array
    {
        $patient = new Patient();
        $patient->withSurname('Тестовый')
            ->withFirstname('Пациент')
            ->withBirthdate(2005-01-01)
            ->withGender(0);

        $representative = new Representative();
        $representative->withSurname('Тестовая')
            ->withFirstname('Представительница')
            ->withMiddlename('Пациентовна');

        $informing = new Informing();
        $informing->withEmail('test@pochta.ru')
            ->withMobile_phone('79998887766')
            ->withHome_phone('74991112233');

        $additionalInformation = new AdditionalInformation();
        $additionalInformation->withPregnant_week(2)
            ->withCycle_day(0)
            ->withRegion('Ставропольский край')
            ->withCity('Невинномысск')
            ->withAddress('ул. Мира д.1 кв. 5')
            ->withPassport('0715 123654')
            ->withPassport_issued(2000-01-01)
            ->withSnils('123-654-987 45')
            ->withOms('26514125468751')
            ->withDms('ДМС/54-25')
            ->withDmc_companyname('ингосстрах');

        $additionalTests = new AdditionalTests();
        $additionalTests->withId('MIC_chuv');

        $services = new Services();
        $services->withId('NM_Candida&amp;Candida')
            ->withName('Посев на грибы р.Candida')
            ->withBiomaterial_id('Mazok')
            ->withOther_biomaterial('')
            ->withLocalization_id('L_drugoe')
            ->withOther_localization('из влагалища')
            ->withTransport_id('00025')
            ->withAdditional_tests($additionalTests);

        $servicesSupplementals = new ServicesSupplementals();
        $servicesSupplementals->withId('Tarif2')
            ->withName('Взятие биоматериала (мазок)')
            ->withValue('Мазок');

        $order = new Order(
            'my-order-124',
            '',
            'mom',
            '1000',
            "sha1('1231000Тестовый2005-01-01b4f6d7d2fe94123c03c86412a0b649494017463f')",
            'донесет справки завтра',
            true,
            '',
            1,
            '',
            $patient,
            $representative,
            $informing,
            $additionalInformation,
            $services,
            '',
            $servicesSupplementals,
            '',
            '',
            '',
            '',
            '',
            '',
            '',
            '',
            '',
            '',
            '',
            '',
            '',
            '',
            '',
            '',
            '',
            '',
            '',
        );

        $this->client->create_order($order);

        return 'test';
    }

    /**
     * @Route("/posts", name="posts_add", methods={"POST"})
     */
    public function addPost(){
        return $this->fetchGemotestInformation();
    }

    /**
     * @Route("/posts/{id}", name="posts_put", methods={"PUT"})
     */
    public function updatePost(){
        return $this->json('test');
    }

    /**
     * @Route("/posts/{id}", name="posts_delete", methods={"DELETE"})
     */
    public function deletePost(){
        return $this->json('test');
    }
}