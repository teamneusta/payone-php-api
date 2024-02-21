<?php

namespace ArvPayoneApi\Response;

enum PaymentStatus: string
{
    case Canceled = 'canceled';
    case Failed = 'failed';
}
