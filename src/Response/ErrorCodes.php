<?php

namespace ArvPayoneApi\Response;
/**
 * See list of payone error codes here: https://docs.payone.com/display/public/PLATFORM/Error+messages
 */
enum ErrorCodes: int
{
    case Operation_was_cancelled_by_the_user = 970;
}
