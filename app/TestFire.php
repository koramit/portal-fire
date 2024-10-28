<?php

namespace App;

use App\Actions\FireAction;
use Illuminate\Http\Client\ConnectionException;

class TestFire
{
    /**
     * @throws ConnectionException
     */
    public function admit(): array
    {
        $headers = [
            'Content-Type' => 'application/json',
            'x-consumer-id' => '1c16e219-efc9-4e5f-971e-c01eb7f8ce2e',
        ];

        $body = [
            'request' => [
                'subsystem' => 'SYS_1',
                'HospitalNumber' => '44027145',
                'AdmittedDateTime' => '2009-12-17',
                '_format' => 'json',
            ]
        ];

        $url = 'https://rhapsody-dev.si.mahidol.ac.th:6162/Siriraj/Admit';

        return (new FireAction)($url, $headers, $body, 'POST');
    }

    /**
     * @throws ConnectionException
     */
    public function dispensing(): array
    {
        $headers = [
            'Content-Type' => 'application/json',
            'x-consumer-id' => '1c16e219-efc9-4e5f-971e-c01eb7f8ce2e',
        ];

        $body = [
            'Request' => [
                'subsystem' => 'SYS_1',
                'HospitalNumber' => '52903693',
                'ServiceIssueDate' => '2014-07-04',
                'DispensingPatientType' => 'IPD',
                '_format' => 'json',
            ]
        ];

        $url = 'https://rhapsody-dev.si.mahidol.ac.th:6162/Siriraj/Dispensing';

        return (new FireAction)($url, $headers, $body, 'POST');
    }

    /**
     * @throws ConnectionException
     */
    public function appointment(): array
    {
        $headers = [
            'Content-Type' => 'application/json',
            'x-consumer-id' => '1c16e219-efc9-4e5f-971e-c01eb7f8ce2e',
        ];

        $body = [
            'Request' => [
                'subsystem' => 'SYS_1',
                'HN' => '42052193',
                '_format' => 'json',
            ]
        ];

        $url = 'https://rhapsody-dev.si.mahidol.ac.th:6162/Siriraj/Appointment';

        return (new FireAction)($url, $headers, $body, 'POST');
    }

    /**
     * @throws ConnectionException
     */
    public function allergy(): array
    {
        $headers = [
            'Content-Type' => 'application/json',
            'x-consumer-id' => '1c16e219-efc9-4e5f-971e-c01eb7f8ce2e',
        ];

        $body = ['patient.identifier' => 'http://si.mahidol.ac.th/eHIS/MP_PATIENT|44027145'];

        $url = 'https://rhapsody-dev.si.mahidol.ac.th:6162/Siriraj/FHIR/AllergyIntolerance';

        return (new FireAction)($url, $headers, $body, 'GET');
    }

    /**
     * @throws ConnectionException
     */
    public function patient(): array
    {
        $headers = [
            'Content-Type' => 'application/json',
            'x-consumer-id' => '1c16e219-efc9-4e5f-971e-c01eb7f8ce2e',
        ];

        $body = ['identifier' => 'http://si.mahidol.ac.th/eHIS/MP_PATIENT|44027145'];

        $url = 'https://rhapsody-dev.si.mahidol.ac.th:6162/Siriraj/FHIR/Patient';

        return (new FireAction)($url, $headers, $body, 'GET');
    }
}
