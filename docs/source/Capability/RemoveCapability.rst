RemoveCapability Method
=======================

Remove a capability resource.

Request Format
--------------

+-----------------+----------------------------------+--------+------------+
| *Parameter*     | *Description*                    | *Type* | *Required* |
+=================+==================================+========+============+
| `RequestMethod` | RemoveCapability                 | String | Yes        |
+-----------------+----------------------------------+--------+------------+
| `CapabilityID`  | UUID of the capability to remove | UUID   | Yes        |
+-----------------+----------------------------------+--------+------------+

Sample request: ::

    RequestMethod=RemoveCapability
    &CapabilityID=c006082b-80eb-4d17-90ff-224412c574ea


Response Format
---------------

+-------------+---------------------------------------+---------+
| *Parameter* | *Description*                         | *Type*  |
+=============+=======================================+=========+
| `Success`   | True if the capability was removed or | Boolean |
|             | did not exist, False if a Message was |         |
|             | returned                              |         |
+-------------+---------------------------------------+---------+
| `Message`   | Error message                         | String  |
+-------------+---------------------------------------+---------+

Success: ::

    {
        "Success":true,
    }


Failure: ::

    {
        "Success":false,
        "Message":"An unknown error occurred"
    }

