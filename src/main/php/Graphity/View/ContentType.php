<?php

/**
 *  Copyright 2011 Graphity Team
 *
 *  Licensed under the Apache License, Version 2.0 (the "License");
 *  you may not use this file except in compliance with the License.
 *  You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 *  Unless required by applicable law or agreed to in writing, software
 *  distributed under the License is distributed on an "AS IS" BASIS,
 *  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *  See the License for the specific language governing permissions and
 *  limitations under the License.
 *
 *  @package        graphity
 *  @author         Martynas Jusevičius <martynas@graphity.org>
 *  @link           http://graphity.org/
 */

namespace Graphity\View;

/**
 * A static class that holds MIME type constants, such as "text/html".
 */
class ContentType
{
    const TEXT_PLAIN = "text/plain";

    const XHTML_XML = "application/xhtml+xml";

    const TEXT_HTML = "text/html";

    const APPLICATION_XML = "application/xml";

    const APPLICATION_RDF_XML = "application/rdf+xml";

    const APPLICATION_RSS_XML = "application/rss+xml";

    const APPLICATION_JSON = "application/json";

    const APPLICATION_SPARQL_XML = "application/sparql-results+xml";

    const APPLICATION_SPARQL_UPDATE = "application/sparql-update";
}

