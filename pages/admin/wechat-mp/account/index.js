import React from 'react';
import {Page, PageActions} from '@mxjs/a-page';
import {Form, FormAction, FormItem} from '@mxjs/a-form';

const Index = () => {
  return (
    <Page>
      <PageActions mb={12}>
        小程序设置
      </PageActions>
      <Form method="patch" labelCol={{span: 8}} wrapperCol={{span: 8}}>
        <FormItem label="AppID（应用ID）" name="applicationId" required/>
        <FormItem label="AppSecret（应用密钥）" name="applicationSecret" required type="password"/>
        <FormAction wrapperCol={{offset: 8}} list={false}/>
      </Form>
    </Page>
  );
};

export default Index;
