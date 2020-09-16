

class AccountServiceClientTest extends TestCase
{
    public function testDeactivateApp()
    {
        $environment = getenv("ENVIRONMENT");
        if ($environment == null) {
            $environment = "DEMO";
        }
        $client = new AccountsServiceClient($environment);

        $req = new DeactivateAppRequest();
        $req->setBusinessId("AG-PJD3JFTKBB");
        $req->setAppId("MP-94072e44d5364872b672d7ab4fc7a7e8");
        $req->setActivationId("a2d8875f-623d-47f4-87b2-a1fdc700a000");
        $req->setDeactivationType(DeactivationType::DEACTIVATION_TYPE_CANCEL);

         try {
            $resp = $client->DeactivateApp($req);
        } catch (Vendasta\Vax\SDKException $e) {
            self::fail('unexpected error');
            return;
        }
    }
