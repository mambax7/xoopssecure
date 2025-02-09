<?php

/*************************************************************************************
 * oracle8.php
 * -----------
 * Author: Guy Wicks (Guy.Wicks@rbs.co.uk)
 * Copyright: (c) 2004 Nigel McNie (http://qbnz.com/highlighter)
 * Release Version: 1.0.9.1
 * Date Started: 2004/06/04
 *
 * Oracle 8 language file for GeSHi.
 *
 * CHANGES
 * -------
 * 2005/01/29 (1.0.0)
 *  -  First Release
 *
 * TODO (updated 2004/11/27)
 * -------------------------
 *
 * ************************************************************************************
 *
 *     This file is part of GeSHi.
 *
 *   GeSHi is free software; you can redistribute it and/or modify
 *   it under the terms of the GNU General Public License as published by
 *   the Free Software Foundation; either version 2 of the License, or
 *   (at your option) any later version.
 *
 *   GeSHi is distributed in the hope that it will be useful,
 *   but WITHOUT ANY WARRANTY; without even the implied warranty of
 *   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *   GNU General Public License for more details.
 *
 *   You should have received a copy of the GNU General Public License
 *   along with GeSHi; if not, write to the Free Software
 *   Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
 ************************************************************************************/

$language_data = array (
    'LANG_NAME' => 'Oracle 8 SQL',
    'COMMENT_SINGLE' => array(1 => '--'),
    'COMMENT_MULTI' => array('/*' => '*/'),
    'CASE_KEYWORDS' => GESHI_CAPS_UPPER,
    'QUOTEMARKS' => array("'", '"', '`'),
    'ESCAPE_CHAR' => '\\',
    'KEYWORDS' => array(
//Put your package names here - e.g. select distinct ''''|| lower(name) || ''',' from user_source;
//        6 => array(
//            ),

//Put your table names here - e.g. select distinct ''''|| lower(table_name) || ''',' from user_tables;
//        5 => array(
//            ),

//Put your view names here - e.g. select distinct ''''|| lower(view_name) || ''',' from user_views;
//        4 => array(
//            ),

//Put your table field names here - e.g. select distinct ''''|| lower(column_name) || ''',' from user_tab_columns;
//        3 => array(
//            ),

//Put ORACLE reserved keywords here (8.1.7).  I like mine uppercase.
        1 => array(
            'ABS',
            'ACCESS',
            'ACOS',
            'ADD',
            'ADD_MONTHS',
            'ALL',
            'ALTER',
            'ANALYZE',
            'AND',
            'ANY',
            'ARRAY',
            'AS',
            'ASC',
            'ASCII',
            'ASIN',
            'ASSOCIATE',
            'AT',
            'ATAN',
            'ATAN2',
            'AUDIT',
            'AUTHID',
            'AVG',
            'BEGIN',
            'BETWEEN',
            'BFILENAME',
            'BINARY_INTEGER',
            'BITAND',
            'BODY',
            'BOOLEAN',
            'BULK',
            'BY',
            'CALL',
            'CASCADE',
            'CASE',
            'CEIL',
            'CHAR',
            'CHAR_BASE',
            'CHARTOROWID',
            'CHECK',
            'CHR',
            'CLOSE',
            'CLUSTER',
            'COALESCE',
            'COLLECT',
            'COLUMN',
            'COMMENT',
            'COMMIT',
            'COMPRESS',
            'CONCAT',
            'CONNECT',
            'CONSTANT',
            'CONSTRAINT',
            'CONSTRAINTS',
            'CONTEXT',
            'CONTROLFILE',
            'CONVERT',
            'CORR',
            'COS',
            'COSH',
            'COST',
            'COUNT',
            'COVAR_POP',
            'COVAR_SAMP',
            'CREATE',
            'CUME_DIST',
            'CURRENT',
            'CURRVAL',
            'CURSOR',
            'DATABASE',
            'DATE',
            'DAY',
            'DECIMAL',
            'DECLARE',
            'DECODE',
            'DEFAULT',
            'DELETE',
            'DENSE_RANK',
            'DEREF',
            'DESC',
            'DIMENSION',
            'DIRECTORY',
            'DISASSOCIATE',
            'DISTINCT',
            'DO',
            'DROP',
            'DUMP',
            'ELSE',
            'ELSIF',
            'EMPTY_BLOB',
            'EMPTY_CLOB',
            'END',
            'EXCEPTION',
            'EXCLUSIVE',
            'EXEC',
            'EXECUTE',
            'EXISTS',
            'EXIT',
            'EXP',
            'EXPLAIN',
            'EXTENDS',
            'EXTRACT',
            'FALSE',
            'FETCH',
            'FILE',
            'FIRST_VALUE',
            'FLOAT',
            'FLOOR',
            'FOR',
            'FORALL',
            'FROM',
            'FUNCTION',
            'GOTO',
            'GRANT',
            'GREATEST',
            'GROUP',
            'GROUPING',
            'HAVING',
            'HEAP',
            'HEXTORAW',
            'HOUR',
            'IDENTIFIED',
            'IF',
            'IMMEDIATE',
            'IN',
            'INCREMENT',
            'INDEX',
            'INDEXTYPE',
            'INDICATOR',
            'INITCAP',
            'INITIAL',
            'INSERT',
            'INSTR',
            'INSTRB',
            'INTEGER',
            'INTERFACE',
            'INTERSECT',
            'INTERVAL',
            'INTO',
            'IS',
            'ISOLATION',
            'JAVA',
            'KEY',
            'LAG',
            'LAST_DAY',
            'LAST_VALUE',
            'LEAD',
            'LEAST',
            'LENGTH',
            'LENGTHB',
            'LEVEL',
            'LIBRARY',
            'LIKE',
            'LIMITED',
            'LINK',
            'LN',
            'LOCK',
            'LOG',
            'LONG',
            'LOOP',
            'LOWER',
            'LPAD',
            'LTRIM',
            'MAKE_REF',
            'MATERIALIZED',
            'MAX',
            'MAXEXTENTS',
            'MIN',
            'MINUS',
            'MINUTE',
            'MLSLABEL',
            'MOD',
            'MODE',
            'MODIFY',
            'MONTH',
            'MONTHS_BETWEEN',
            'NATURAL',
            'NATURALN',
            'NEW',
            'NEW_TIME',
            'NEXT_DAY',
            'NEXTVAL',
            'NLS_CHARSET_DECL_LEN',
            'NLS_CHARSET_ID',
            'NLS_CHARSET_NAME',
            'NLS_INITCAP',
            'NLS_LOWER',
            'NLS_UPPER',
            'NLSSORT',
            'NOAUDIT',
            'NOCOMPRESS',
            'NOCOPY',
            'NOT',
            'NOWAIT',
            'NTILE',
            'NULL',
            'NULLIF',
            'NUMBER',
            'NUMBER_BASE',
            'NUMTODSINTERVAL',
            'NUMTOYMINTERVAL',
            'NVL',
            'NVL2',
            'OCIROWID',
            'OF',
            'OFFLINE',
            'ON',
            'ONLINE',
            'OPAQUE',
            'OPEN',
            'OPERATOR',
            'OPTION',
            'OR',
            'ORDER',
            'ORGANIZATION',
            'OTHERS',
            'OUT',
            'OUTLINE',
            'PACKAGE',
            'PARTITION',
            'PCTFREE',
            'PERCENT_RANK',
            'PLAN',
            'PLS_INTEGER',
            'POSITIVE',
            'POSITIVEN',
            'POWER',
            'PRAGMA',
            'PRIMARY',
            'PRIOR',
            'PRIVATE',
            'PRIVILEGES',
            'PROCEDURE',
            'PROFILE',
            'PUBLIC',
            'RAISE',
            'RANGE',
            'RANK',
            'RATIO_TO_REPORT',
            'RAW',
            'RAWTOHEX',
            'REAL',
            'RECORD',
            'REF',
            'REFTOHEX',
            'REGR_AVGX',
            'REGR_AVGY',
            'REGR_COUNT',
            'REGR_INTERCEPT',
            'REGR_R2',
            'REGR_SLOPE',
            'REGR_SXX',
            'REGR_SXY',
            'REGR_SYY',
            'RELEASE',
            'RENAME',
            'REPLACE',
            'RESOURCE',
            'RETURN',
            'RETURNING',
            'REVERSE',
            'REVOKE',
            'ROLE',
            'ROLLBACK',
            'ROUND',
            'ROW',
            'ROW_NUMBER',
            'ROWID',
            'ROWIDTOCHAR',
            'ROWNUM',
            'ROWS',
            'ROWTYPE',
            'RPAD',
            'RTRIM',
            'SAVEPOINT',
            'SCHEMA',
            'SECOND',
            'SEGMENT',
            'SELECT',
            'SEPERATE',
            'SEQUENCE',
            'SESSION',
            'SET',
            'SHARE',
            'SIGN',
            'SIN',
            'SINH',
            'SIZE',
            'SMALLINT',
            'SOUNDEX',
            'SPACE',
            'SQL',
            'SQLCODE',
            'SQLERRM',
            'SQRT',
            'START',
            'STATISTICS',
            'STDDEV',
            'STDDEV_POP',
            'STDDEV_SAMP',
            'STOP',
            'SUBSTR',
            'SUBSTRB',
            'SUBTYPE',
            'SUCCESSFUL',
            'SUM',
            'SYNONYM',
            'SYS_CONTEXT',
            'SYS_GUID',
            'SYSDATE',
            'SYSTEM',
            'TABLE',
            'TABLESPACE',
            'TAN',
            'TANH',
            'TEMPORARY',
            'THEN',
            'TIME',
            'TIMESTAMP',
            'TIMEZONE_ABBR',
            'TIMEZONE_HOUR',
            'TIMEZONE_MINUTE',
            'TIMEZONE_REGION',
            'TIMING',
            'TO',
            'TO_CHAR',
            'TO_DATE',
            'TO_LOB',
            'TO_MULTI_BYTE',
            'TO_NUMBER',
            'TO_SINGLE_BYTE',
            'TRANSACTION',
            'TRANSLATE',
            'TRIGGER',
            'TRIM',
            'TRUE',
            'TRUNC',
            'TRUNCATE',
            'TYPE',
            'UI',
            'UID',
            'UNION',
            'UNIQUE',
            'UPDATE',
            'UPPER',
            'USE',
            'USER',
            'USERENV',
            'USING',
            'VALIDATE',
            'VALUE',
            'VALUES',
            'VAR_POP',
            'VAR_SAMP',
            'VARCHAR',
            'VARCHAR2',
            'VARIANCE',
            'VIEW',
            'VSIZE',
            'WHEN',
            'WHENEVER',
            'WHERE',
            'WHILE',
            'WITH',
            'WORK',
            'WRITE',
            'YEAR',
            'ZONE'
            )
        ),
    'SYMBOLS' => array(
        '(', ')', '=', '<', '>', '|', '+', '-', '*', '/', ','
        ),
    'CASE_SENSITIVE' => array(
        GESHI_COMMENTS => false,
        1 => false,
//        3 => false,
//        4 => false,
//        5 => false,
//        6 => false
        ),
    'STYLES' => array(
        'KEYWORDS' => array(
            1 => 'color: #993333; font-weight: bold; text-transform: uppercase;'
//Add the styles for groups 3-6 here when used
            ),
        'COMMENTS' => array(
            1 => 'color: #808080; font-style: italic;'
            ),
        'ESCAPE_CHAR' => array(
            0 => 'color: #000099; font-weight: bold;'
            ),
        'BRACKETS' => array(
            0 => 'color: #66cc66;'
            ),
        'STRINGS' => array(
            0 => 'color: #ff0000;'
            ),
        'NUMBERS' => array(
            0 => 'color: #cc66cc;'
            ),
        'METHODS' => array(
            1 => 'color: #ff0000;'
            ),
        'SYMBOLS' => array(
            0 => 'color: #66cc66;'
            ),
        'SCRIPT' => array(
            ),
        'REGEXPS' => array(
            )
        ),
    'URLS' => array(
        1 => '',
//        3 => '',
//        4 => '',
//        5 => '',
//        6 => ''
        ),
    'OOLANG' => false,
    'OBJECT_SPLITTERS' => array(
        ),
    'REGEXPS' => array(
        ),
    'STRICT_MODE_APPLIES' => GESHI_NEVER,
    'SCRIPT_DELIMITERS' => array(
        ),
    'HIGHLIGHT_STRICT_BLOCK' => array(
        )
);
