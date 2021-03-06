<?php

declare(strict_types=1);

namespace Doctrine\DBAL\Platforms\Keywords;

/**
 * SAP Sybase SQL Anywhere 16 reserved keywords list.
 */
class SQLAnywhere16Keywords extends KeywordList
{
    public function getName(): string
    {
        return 'SQLAnywhere16';
    }

    /**
     * {@inheritdoc}
     *
     * @link http://infocenter.sybase.com/help/topic/com.sybase.dbrfen10/pdf/dbrfen10.pdf?noframes=true
     */
    protected function getKeywords(): array
    {
        return [
            'ADD',
            'ALL',
            'ALTER',
            'AND',
            'ANY',
            'ARRAY',
            'AS',
            'ASC',
            'ATTACH',
            'BACKUP',
            'BEGIN',
            'BETWEEN',
            'BIGINT',
            'BINARY',
            'BIT',
            'BOTTOM',
            'BREAK',
            'BY',
            'CALL',
            'CAPABILITY',
            'CASCADE',
            'CASE',
            'CAST',
            'CHAR',
            'CHAR_CONVERT',
            'CHARACTER',
            'CHECK',
            'CHECKPOINT',
            'CLOSE',
            'COMMENT',
            'COMMIT',
            'COMPRESSED',
            'CONFLICT',
            'CONNECT',
            'CONSTRAINT',
            'CONTAINS',
            'CONTINUE',
            'CONVERT',
            'CREATE',
            'CROSS',
            'CUBE',
            'CURRENT',
            'CURRENT_TIMESTAMP',
            'CURRENT_USER',
            'CURSOR',
            'DATE',
            'DATETIMEOFFSET',
            'DBSPACE',
            'DEALLOCATE',
            'DEC',
            'DECIMAL',
            'DECLARE',
            'DEFAULT',
            'DELETE',
            'DELETING',
            'DESC',
            'DETACH',
            'DISTINCT',
            'DO',
            'DOUBLE',
            'DROP',
            'DYNAMIC',
            'ELSE',
            'ELSEIF',
            'ENCRYPTED',
            'END',
            'ENDIF',
            'ESCAPE',
            'EXCEPT',
            'EXCEPTION',
            'EXEC',
            'EXECUTE',
            'EXISTING',
            'EXISTS',
            'EXTERNLOGIN',
            'FETCH',
            'FIRST',
            'FLOAT',
            'FOR',
            'FORCE',
            'FOREIGN',
            'FORWARD',
            'FROM',
            'FULL',
            'GOTO',
            'GRANT',
            'GROUP',
            'HAVING',
            'HOLDLOCK',
            'IDENTIFIED',
            'IF',
            'IN',
            'INDEX',
            'INNER',
            'INOUT',
            'INSENSITIVE',
            'INSERT',
            'INSERTING',
            'INSTALL',
            'INSTEAD',
            'INT',
            'INTEGER',
            'INTEGRATED',
            'INTERSECT',
            'INTO',
            'IS',
            'ISOLATION',
            'JOIN',
            'JSON',
            'KERBEROS',
            'KEY',
            'LATERAL',
            'LEFT',
            'LIKE',
            'LIMIT',
            'LOCK',
            'LOGIN',
            'LONG',
            'MATCH',
            'MEMBERSHIP',
            'MERGE',
            'MESSAGE',
            'MODE',
            'MODIFY',
            'NATURAL',
            'NCHAR',
            'NEW',
            'NO',
            'NOHOLDLOCK',
            'NOT',
            'NOTIFY',
            'NULL',
            'NUMERIC',
            'NVARCHAR',
            'OF',
            'OFF',
            'ON',
            'OPEN',
            'OPENSTRING',
            'OPENXML',
            'OPTION',
            'OPTIONS',
            'OR',
            'ORDER',
            'OTHERS',
            'OUT',
            'OUTER',
            'OVER',
            'PASSTHROUGH',
            'PRECISION',
            'PREPARE',
            'PRIMARY',
            'PRINT',
            'PRIVILEGES',
            'PROC',
            'PROCEDURE',
            'PUBLICATION',
            'RAISERROR',
            'READTEXT',
            'REAL',
            'REFERENCE',
            'REFERENCES',
            'REFRESH',
            'RELEASE',
            'REMOTE',
            'REMOVE',
            'RENAME',
            'REORGANIZE',
            'RESOURCE',
            'RESTORE',
            'RESTRICT',
            'RETURN',
            'REVOKE',
            'RIGHT',
            'ROLLBACK',
            'ROLLUP',
            'ROW',
            'ROWTYPE',
            'SAVE',
            'SAVEPOINT',
            'SCROLL',
            'SELECT',
            'SENSITIVE',
            'SESSION',
            'SET',
            'SETUSER',
            'SHARE',
            'SMALLINT',
            'SOME',
            'SPATIAL',
            'SQLCODE',
            'SQLSTATE',
            'START',
            'STOP',
            'SUBTRANS',
            'SUBTRANSACTION',
            'SYNCHRONIZE',
            'TABLE',
            'TEMPORARY',
            'THEN',
            'TIME',
            'TIMESTAMP',
            'TINYINT',
            'TO',
            'TOP',
            'TRAN',
            'TREAT',
            'TRIGGER',
            'TRUNCATE',
            'TSEQUAL',
            'UNBOUNDED',
            'UNION',
            'UNIQUE',
            'UNIQUEIDENTIFIER',
            'UNKNOWN',
            'UNNEST',
            'UNSIGNED',
            'UPDATE',
            'UPDATING',
            'USER',
            'USING',
            'VALIDATE',
            'VALUES',
            'VARBINARY',
            'VARBIT',
            'VARCHAR',
            'VARIABLE',
            'VARRAY',
            'VARYING',
            'VIEW',
            'WAIT',
            'WAITFOR',
            'WHEN',
            'WHERE',
            'WHILE',
            'WINDOW',
            'WITH',
            'WITHIN',
            'WORK',
            'WRITETEXT',
            'XML',
        ];
    }
}
