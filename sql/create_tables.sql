drop table if exits m_user;
create table m_user (
    m_user_id mediumint not null auto_increment,
    m_user_first_name varchar(25),
    m_user_middle_name varchar(25),
    m_user_last_name varchar(25),
    m_user_email_id varchar(100),
    m_user_username varchar(25),
    m_user_password_hash varchar(100),
    m_user_points mediumint,
    m_user_registered_datetime datetime,
    m_user_last_login_ip varchar(100),
    m_user_table_modified_timestamp timestamp not null default current_timestamp on update current_timestamp,
    primary key(m_user_id)
);

drop table if exits m_target;
create table m_target (
    m_target_id mediumint not null auto_increment,
    m_target_user_id mediumint,
    m_target_title varchar(255),
    m_target_description text(1000),
    m_target_category varchar(100),
    m_target_start_datetime datetime,
    m_target_end_datetime datetime,
    m_target_bid_point tinyint,
    m_target_accomplish_flag tinyint,
    m_target_accomplish_percentage tinyint,
    m_target_accomplish_satisfaction tinyint,
    m_target_target_failure_reason text(1000),
    m_target_postpone_end_datetime datetime,
    m_target_table_modified_timestamp timestamp not null default current_timestamp on update current_timestamp,
    primary key(m_target_id)
);

