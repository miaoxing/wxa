import {MemoryRouter} from 'react-router';
import $, {Ret} from 'miaoxing';
import Index from './index';
import {app} from '@mxjs/app';
import {fireEvent, render, waitFor} from '@testing-library/react';
import {bootstrap, createPromise, resetUrl, setUrl} from '@mxjs/test';

bootstrap();

describe('admin/wechat-mp/account', () => {
  beforeEach(function () {
    setUrl('admin/wechat-mp/account');
    app.page = {
      collection: 'admin/wechat-mp/account',
      index: true,
    };
  });

  afterEach(() => {
    resetUrl();
    app.page = {};
  });

  test('index', async () => {
    const promise = createPromise();
    const promise2 = createPromise();

    $.http = jest.fn()
      .mockImplementationOnce(() => promise.resolve({
        ret: Ret.new({
          code: 0,
          data: {
            applicationId: 'appId',
            applicationSecret: 'appSecret',
          },
        }),
      }))
      // 提交
      .mockImplementationOnce(() => promise2.resolve({
        ret: Ret.new({
          code: 0,
        }),
      }));

    const {getByLabelText, getByText} = render(<MemoryRouter>
      <Index/>
    </MemoryRouter>);

    await Promise.all([promise]);
    expect($.http).toMatchSnapshot();

    // 看到表单加载了数据
    await waitFor(() => expect(getByLabelText('AppID（应用ID）').value).toBe('appId'));
    expect(getByLabelText('AppSecret（应用密钥）').value).toBe('appSecret');

    // 提交表单
    fireEvent.change(getByLabelText('AppID（应用ID）'), {target: {value: 'appId2'}});
    fireEvent.change(getByLabelText('AppSecret（应用密钥）'), {target: {value: 'appSecret2'}});
    fireEvent.click(getByText('提 交'));

    await Promise.all([promise2]);
    expect($.http).toMatchSnapshot();
  });
});
